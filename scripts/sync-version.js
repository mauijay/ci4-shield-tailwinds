import { readFileSync, writeFileSync, existsSync } from 'fs';
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

  // Update .env (local only - not tracked)
  const envPath = join(rootDir, '.env');
  if (existsSync(envPath)) {
    let envContent = readFileSync(envPath, 'utf8');
    const versionRegex = /^app\.version\s*=\s*.+$/m;
    
    if (versionRegex.test(envContent)) {
      envContent = envContent.replace(versionRegex, `app.version = ${version}`);
    } else {
      // Add to APP section or end of file
      const appSectionRegex = /(#-+\s*\n# APP\s*\n#-+\s*\n)/;
      if (appSectionRegex.test(envContent)) {
        envContent = envContent.replace(appSectionRegex, `$1\napp.version = ${version}\n`);
      } else {
        envContent += `\n# APP VERSION\napp.version = ${version}\n`;
      }
    }
    
    writeFileSync(envPath, envContent);
  }

  // Update .env.example (tracked in Git)
  const envExamplePath = join(rootDir, '.env.example');
  if (existsSync(envExamplePath)) {
    let envExampleContent = readFileSync(envExamplePath, 'utf8');
    const versionRegex = /^app\.version\s*=\s*.+$/m;
    
    if (versionRegex.test(envExampleContent)) {
      envExampleContent = envExampleContent.replace(versionRegex, `app.version = ${version}`);
    } else {
      // Add to APP section or end of file
      const appSectionRegex = /(#-+\s*\n# APP\s*\n#-+\s*\n)/;
      if (appSectionRegex.test(envExampleContent)) {
        envExampleContent = envExampleContent.replace(appSectionRegex, `$1\napp.version = ${version}\n`);
      } else {
        envExampleContent += `\n# APP VERSION\napp.version = ${version}\n`;
      }
    }
    
    writeFileSync(envExamplePath, envExampleContent);
  }

  console.log(`✅ Updated package.json version to ${version}`);
  console.log(`✅ Updated composer.json version to ${version}`);
  console.log(`✅ Updated .env app.version to ${version} (local only)`);
  console.log(`✅ Updated .env.example app.version to ${version} (tracked)`);
  console.log(`📦 All versions are now in sync!`);
  
} catch (error) {
  console.error('❌ Error syncing versions:', error.message);
  process.exit(1);
}