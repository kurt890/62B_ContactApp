import { Client } from 'ssh2';
import { getPrivateKey } from '../auth/keys';
import { getCredentials } from '../auth/credentials';
import { sshConfig } from '../config/ssh-config';

export function createConnection() {
    const { host, port, username } = sshConfig;
    const privateKey = getPrivateKey();
    const credentials = getCredentials();

    const conn = new Client();
    conn.on('ready', () => {
        console.log('Client :: ready');
    }).connect({
        host,
        port,
        username: credentials.username || username,
        privateKey: privateKey,
        password: credentials.password
    });

    return conn;
}