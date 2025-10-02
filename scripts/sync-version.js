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
  writeFileSync(composerJsonPath, JSON.stringify(composerJson, null, 2) + '\n');

  // Update .env app.version
  const envPath = join(rootDir, '.env');
  let envContent = readFileSync(envPath, 'utf8');
  
  // Replace app.version line
  const versionRegex = /^app\.version\s*=\s*.+$/m;
  if (versionRegex.test(envContent)) {
    envContent = envContent.replace(versionRegex, `app.version = ${version}`);
  } else {
    // If app.version doesn't exist, add it to the APP section
    const appSectionRegex = /(#-+\s*\n# APP\s*\n#-+\s*\n)/;
    if (appSectionRegex.test(envContent)) {
      envContent = envContent.replace(appSectionRegex, `$1\napp.version = ${version}\n`);
    } else {
      // Fallback: add at the end
      envContent += `\napp.version = ${version}\n`;
    }
  }
  
  writeFileSync(envPath, envContent);

  console.log(`✅ Updated package.json version to ${version}`);
  console.log(`✅ Updated composer.json version to ${version}`);
  console.log(`✅ Updated .env app.version to ${version}`);
  console.log(`📦 All versions are now in sync!`);
  
} catch (error) {
  console.error('❌ Error syncing versions:', error.message);
  process.exit(1);
}