export function getCredentials(): { username: string; password: string } {
    const username = process.env.SSH_USERNAME || '';
    const password = process.env.SSH_PASSWORD || '';
    return { username, password };
}