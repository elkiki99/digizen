# Digizen

**Digizen** is a sleek and modern template designed for digital agencies and web applications. It provides a solid foundation with beautifully crafted pages, intuitive layouts, and a fully responsive design powered by Laravel and Livewire FluxUI components. The template includes ready-to-use user and admin dashboards, pre-configured authentication with Laravel Breeze, and middleware for role-based access. Inspired by [Digidop](https://www.digidop.com/), a Webflow digital agency, Digizen is the perfect starting point for building professional and high-performance digital products.




## Key Features

- **Modern & Elegant Design**: A well-structured, visually stunning layout designed for a seamless user experience.
- **Fully Configured Pages**: Beautiful, pre-built pages optimized for various purposes within the platform.
- **Responsive Design**: Perfectly adapts to all devices, from mobile to large screens, using Tailwind CSS.
- **Component-Based System**: A collection of reusable UI components for consistency and efficiency.
- **Optimized User Experience**: Carefully designed interactions and layouts to enhance usability and engagement.
- **Pre-built User & Admin Dashboards**: Ready-to-use dashboards with essential components provided by https://github.com/elkiki99/flux-volt-starter-kit.

## Getting Started

To use **Digizen**, make sure you have a Flux UI subscription and Tailwind CSS v4.0 installed, then follow this instructions:

1. **Fork the repository.**

2. **Clone the repository:**

    ```bash
    git clone https://github.com/elkiki99/digizen new-name
    cd new-name
    ```

3. **Install the dependencies:**

    ```bash
    composer install
    ```
        
4. **Authenticate your Flux UI account:**
      
    ```bash
    Username: your-flux-email
    Password: your-flux-licence-key
    ```
    
5. **Set up your env file:**
   
    ```bash
    cp .env.example .env
    ```

6. **Generate an application key:**

     ```bash
    php artisan key:generate
     ```

7. **Create database/database.sqlite (if applicable)**

     ```bash
    New-Item -ItemType File -Path database\database.sqlite
     ```
    or
     ```bash
    touch database/database.sqlite
     ```
    
8. **Run your migrations and seeder:**

    ```bash
    php artisan migrate && php artisan db:seed
    ```
    
    - This will create an Admin account & a User account
    - Emails: admin@laravel.com & user@laravel.com, Password: password

9. **Finish installing dependencies and serve**

    ```bash
    npm install && npm run dev
    php artisan serve
    ```
    
10. **Change flux theme**

    - You can go to https://fluxui.dev/themes and follow the instructions to add or modify the application theme.
      
## Contributions

Contributions are welcome! If you'd like to contribute to **Digizen**, please follow these steps:

## Contact

For any inquiries, please reach out at brossani23@gmail.com.
# digizen
# digizen
