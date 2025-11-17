import { createConnection } from './utils/connection';
import { getCredentials } from './auth/credentials';
import { sshConfig } from './config/ssh-config';

const { username, password } = getCredentials();

createConnection(sshConfig, username, password);