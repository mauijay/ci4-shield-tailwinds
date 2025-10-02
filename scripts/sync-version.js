import { readFileSync, writeFileSync } from 'fs';
import { dirname, join } from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);
const rootDir = join(__dirname, '..');

try {
  // Read package.json version
  const packageJsonPath = join(rootDir, 'package.json');
  const packageJson = JSON.parse(readFileSync(packageJsonPath, 'utf8'));
  const version = packageJson.version;

  // Update composer.json version
  const composerJsonPath = join(rootDir, 'composer.json');
  const composerJson = JSON.parse(readFileSync(composerJsonPath, 'utf8'));
  composerJson.version = version;

  // Write updated composer.json
  writeFileSync(composerJsonPath, JSON.stringify(composerJson, null, 2) + '\n');

  console.log(`✅ Updated composer.json version to ${version}`);
  console.log(`📦 Package versions are now in sync!`);
  
} catch (error) {
  console.error('❌ Error syncing versions:', error.message);
  process.exit(1);
}