# ssh-remote-project

This project is designed to facilitate SSH connections using TypeScript. It includes a configuration module for SSH settings, authentication modules for handling keys and credentials, and utility functions for establishing connections.

## Project Structure

- **src/**: Contains the source code for the application.
  - **config/**: Configuration files for SSH connections.
  - **auth/**: Authentication-related functions for SSH.
  - **utils/**: Utility functions for managing connections.
  - **index.ts**: The entry point of the application.

- **tests/**: Contains unit tests for the application.

````markdown
# ssh-remote-project

This project is designed to facilitate SSH connections using TypeScript. It includes a configuration module for SSH settings, authentication modules for handling keys and credentials, and utility functions for establishing connections.

## Project Structure

- **src/**: Contains the source code for the application.
  - **config/**: Configuration files for SSH connections.
  - **auth/**: Authentication-related functions for SSH.
  - **utils/**: Utility functions for managing connections.
  - **index.ts**: The entry point of the application.

- **tests/**: Contains unit tests for the application.

## Installation

To install the necessary dependencies, run:

```
npm install
```

## Usage

To initiate an SSH connection, run the following command:

```
ts-node src/index.ts
```

Make sure to configure your SSH settings in `src/config/ssh-config.ts` before running the application.

## PHP demo (added)

This repository also contains a small demo PHP web application intended for local testing. It lives under `public/` and uses helper functions in `SWD6.2_PHP/Testing.php`.

How to run the PHP demo locally:

1. From the project root run the PHP built-in server:

```bash
php -S localhost:8000 -t public
```

2. Open your browser to `http://localhost:8000`.

Files for the demo:
- `public/index.php` — main entry that includes `SWD6.2_PHP/Testing.php` and renders a small greeting form.
- `public/style.css` — basic styles for the demo page.
- `SWD6.2_PHP/Testing.php` — helper functions `app_get_info` and `app_render_greeting`.

This demo is intentionally minimal and dependency-free. It's convenient for quickly previewing PHP on a development machine.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.

## License

This project is licensed under the MIT License. See the LICENSE file for details.
````