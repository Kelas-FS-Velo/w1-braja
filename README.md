# Profile Project

This is a full-stack project showcasing a profile page with a backend API and a frontend built using Nuxt.js.

## Features
- **Backend**: Built with Laravel, provides a RESTful API for profile data.
- **Frontend**: Built with Nuxt.js, displays profile information including name, bio, profile image, and social links.
- **Social Links**: Dynamically rendered using FontAwesome icons.

## Setup

### Backend
1. Navigate to the `backend` directory:
   ```bash
   cd backend
2. Install dependencies:
   ```bash
   composer install
3. Set up the .env file:
   ```bash
   cp .env.example .env
4. Generate an application key:
   ```bash
   php artisan key:generate
5. Run migrations and seed the database:
   ```bash
   php artisan migrate --seed
6. Start the server:
   ```bash
   php artisan serve
```

### Frontend
1. Navigate to the `frontend` directory:
   ```bash
   cd frontend
2. Install dependencies:
   ```bash
   npm install
3. Start the development server:
   ```bash
   npm run dev
```

### Project Structure
- `backend/`: Contains the Laravel backend code.
- `frontend/`: Contains the Nuxt.js frontend code.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
MIT

### Install dependencies:
```bash
npm install
```

### Start the development server:
```bash
npm run dev
```

### Project Structure
- `backend/`: Contains the Laravel backend code.
- `frontend/`: Contains the Nuxt.js frontend code.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
MIT