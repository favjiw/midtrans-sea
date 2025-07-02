<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Laravel + Midtrans Payment Gateway Integration

This project demonstrates how to integrate Midtrans Snap Payment Gateway into a Laravel application. It is deployed using **Azure Web App for Linux**.

## Features

- Secure payment token generation using Midtrans Snap API
- Laravel backend for handling payment logic
- Deployment-ready on Azure App Service (Linux/PHP 8.2)
- Environment-based configuration using `.env`

## Tech Stack

- Laravel 10
- PHP 8.2
- Midtrans Snap API (Sandbox)
- Azure Web App (Linux)
- Composer

## Live Demo

You can test the API directly:

**POST** `https://payment-with-midtrans.azurewebsites.net/api/midtrans/token`

### Request Body (JSON)

```json
{
  "order_id": "ORDER-1234265",
  "amount": 150000,
  "customer": {
    "first_name": "Budi",
    "last_name": "Santoso",
    "email": "budi@example.com",
    "phone": "081234567890"
  }
}
```
### Sample Response

```json
{
  "token": "e6f6d6d0-6b0a-4dd8-b563-a6d2a0f11f1d"
}
```

