import { createConnection } from '../src/utils/connection';

describe('createConnection', () => {
    it('should establish a connection with valid credentials', async () => {
        const config = {
            host: 'example.com',
            port: 22,
            username: 'user',
            privateKey: 'privateKeyContent'
        };

        const connection = await createConnection(config);
        expect(connection).toBeDefined();
        expect(connection.isConnected()).toBe(true);
    });

    it('should throw an error with invalid credentials', async () => {
        const config = {
            host: 'invalid-host',
            port: 22,
            username: 'user',
            privateKey: 'invalidKey'
        };

        await expect(createConnection(config)).rejects.toThrow('Connection failed');
    });

    // Additional tests can be added here
});