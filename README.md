# GitHub Issues App

This project is a web application that integrates with GitHub to list and display open issues assigned to the logged-in user. It consists of a **frontend** built with **React** and a **backend** powered by **Laravel**. The application is containerized using **Docker** and uses **MySQL** for data storage. The frontend is served on port 8081, while the backend API is handled through Nginx.

## Features

- List open GitHub issues assigned to the logged-in user.
- View detailed information about each issue.
- Built using Laravel for the backend and React for the frontend.
- Dockerized for easy deployment.


## Technologies Used

- **Frontend**: React.js
- **Backend**: Laravel (PHP)
- **Database**: MySQL
- **Web Server**: Nginx
- **Containerization**: Docker

## Prerequisites

To run the application locally, make sure you have the following tools installed:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [PHP](https://www.php.net/) (for Laravel backend)
- [Node.js](https://nodejs.org/) (for React frontend)
- A GitHub account with a Personal Access Token (PAT) for authentication.

## Setup and Installation

### 1. Clone the Repository

Clone this repository to your local machine:

```bash
git clone https://github.com/alymlcz/github-issues.git
cd github-issues

### 2. Set Up Environment Variables

Rename the .env.example file to .env.local and configure your environment variables:

```bash
cp .env.example .env.local

Edit the .env.local file and set the values for:

GITHUB_PERSONAL_TOKEN: Your GitHub Personal Access Token.

Other environment variables (e.g., database credentials, app URL) as needed.

### 3. Build and Start Docker Containers

Use Docker Compose to build and run the application:

```bash
docker-compose up --build

This will build and start the backend (Laravel), frontend (React), and MySQL services in Docker containers.

4. Access the Application
Once the containers are up and running, you can access the application in your browser:

Frontend: http://github-issues.local:8080/issues
Backend: http://localhost:8000/api
