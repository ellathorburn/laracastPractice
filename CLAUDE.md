# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Environment

This is a PHP learning project following Laracast tutorials, containerized with Docker and using NGINX Unit as the application server.

### Running the Application

```bash
# Start the development environment
docker-compose up

# Stop the development environment  
docker-compose down
```

The application runs on `http://localhost:8080` with MySQL available on port `3307`.

### Code Formatting

```bash
# Format PHP code with Prettier
npx prettier --write "practice/**/*.php"
```

## Architecture

### Project Structure
- `practice/` - Main application code
  - `index.php` - Application entry point with database connection setup
  - `router.php` - Simple routing system mapping URIs to controllers
  - `functions.php` - Utility functions (`urlIs()`, `dd()`)
  - `controllers/` - Page controllers that set data and include views
  - `views/` - PHP template files
    - `partials/` - Reusable template components (head, nav, banner, footer)

### Routing System
The application uses a simple array-based router in `router.php`:
- Routes defined as URI => controller file mappings
- Controllers set page variables and include corresponding view files
- 404.php handles unknown routes

### Database Connection
- MySQL database connection configured in `index.php`
- Connection details: `localhost:3307`, database `demo`, user `root`, password `password`
- Uses PDO for database operations

### Docker Setup
- **Web Server**: Custom PHP 8.3 container with NGINX Unit
- **Database**: MySQL 9.4 container
- **Volumes**: `./practice` mounted to `/www/` in container
- **Configuration**: `unit.json` defines Unit server routing and PHP application settings

### Development Notes
- Router is currently commented out in `index.php` (line 4) - application is in database testing mode
- Uses Tailwind CSS classes in views
- Images stored in `practice/images/`
- No existing test framework or linting setup beyond Prettier