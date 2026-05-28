import { execSync, spawnSync } from 'child_process';

const timestamp = new Date().toISOString().slice(0, 16).replace('T', ' ');
const message   = process.argv.slice(2).join(' ') || `Deploy ${timestamp}`;

function run(cmd) {
    try {
        execSync(cmd, { stdio: 'inherit' });
    } catch {
        process.exit(1);
    }
}

function capture(cmd) {
    try {
        return execSync(cmd, { encoding: 'utf8' }).trim();
    } catch {
        return '';
    }
}

run('git add -A');

const staged = capture('git diff --cached --name-only');
if (staged) {
    const safe = message.replace(/"/g, '\\"');
    console.log(`\nCommitting: ${message}\n`);
    run(`git commit -m "${safe}"`);
} else {
    console.log('\nNo new changes — pushing existing commits.\n');
}

run('git push');
console.log('\n✓ Pushed to GitHub. Railway will redeploy automatically.\n');
