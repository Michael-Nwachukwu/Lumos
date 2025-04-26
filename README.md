# Lumos - School Management System

Lumos is a robust and user-friendly school management system designed to streamline administrative tasks and enhance learning experiences. Built with modern technologies, Lumos provides a comprehensive solution for managing assignments, classwork, attendance, course enrollment, and payment integration.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Payment Integration](#payment-integration)
- [Contribution Guidelines](#contribution-guidelines)
- [License](#license)

## Features

Lumos is packed with features to simplify school management:

- **Assignments and Classwork Management:** Teachers can create, assign, and grade assignments and classwork.
- **Attendance Tracking:** Easily track and manage student attendance.
- **Course Enrollment:** Students can enroll in courses, and administrators can manage enrollments.
- **Payment Integration:** Integrated with Flutterwave for secure and seamless fee payments.
- **Role-Based Access Control:** Distinct roles for administrators, teachers, and students.
- **Responsive Design:** Fully responsive interface built with TailwindCSS for seamless use on all devices.
- **Interactive Animations:** Smooth user experience enhanced with AOS (Animate On Scroll) and Splide.js.
- **Announcements and Notifications:** Broadcast announcements and send notifications to users.
- **Gradebook and Reports:** Generate and view student grades and performance reports.
- **Timetable Management:** Create and manage class schedules and timetables.
- **Parent Portal:** Dedicated portal for parents to track their child's progress and activities.

## Technologies Used

Lumos is built using the following technologies:

- **Blade:** Laravel's templating engine for dynamic pages.
- **PHP:** Backend logic and data handling.
- **TypeScript:** For robust and maintainable JavaScript code.
- **JavaScript:** Interactive frontend components.
- **SCSS/CSS:** Styling for a modern and clean user interface.
- **HTML:** Structuring pages and content.
- **TailwindCSS:** Utility-first CSS framework for styling.
- **Splide.js:** For creating carousels and sliders.
- **AOS (Animate On Scroll):** For smooth scroll animations.

## Installation

Follow these steps to set up Lumos on your local machine:

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/Michael-Nwachukwu/Lumos.git](https://github.com/Michael-Nwachukwu/Lumos.git)
    cd Lumos
    ```

2.  **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3.  **Set up your `.env` file:**

    -   Copy `.env.example` to `.env`:

        ```bash
        cp .env.example .env
        ```

    -   Configure your database and other environment settings in the `.env` file.

4.  **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5.  **Run migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

6.  **Build frontend assets:**

    ```bash
    npm run dev
    ```

7.  **Start the development server:**

    ```bash
    php artisan serve
    ```

## Usage

1.  Visit the application in your browser at `http://127.0.0.1:8000`.
2.  Log in as an administrator to access full functionality.
3.  Assign roles to teachers and students for specific tasks.
4.  Explore features such as assignments, attendance, and payment management.

**Default Credentials (if seeded):**

**Admin:**

-   **Email:** `admin@example.com`
-   **Password:** `password`

## Payment Integration

Lumos integrates with Flutterwave for secure and efficient payment processing. To enable payment functionality:

1.  Obtain your Flutterwave API keys from the [Flutterwave Dashboard](https://dashboard.flutterwave.com/).
2.  Add the keys to your `.env` file:

    ```ini
    FLUTTERWAVE_PUBLIC_KEY=your_public_key
    FLUTTERWAVE_SECRET_KEY=your_secret_key
    FLUTTERWAVE_ENCRYPTION_KEY=your_encryption_key
    ```

3.  Test the payment flow and ensure all configurations are correct.

## Contribution Guidelines

We welcome contributions to improve Lumos! To get started:

1.  Fork the repository.
2.  Create a new branch for your feature or bugfix:

    ```bash
    git checkout -b feature/your-feature-name
    ```

3.  Commit your changes:

    ```bash
    git commit -m "Add: Description of your changes"
    ```

4.  Push your branch:

    ```bash
    git push origin feature/your-feature-name
    ```

5.  Open a pull request on the main repository.
