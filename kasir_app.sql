-- phpMyAdmin SQL Dump
-- Database: kasir_app
-- Struktur + data akun admin

CREATE DATABASE IF NOT EXISTS kasir_app;
USE kasir_app;

-- --------------------------------------------------------
-- Tabel admin_users
-- --------------------------------------------------------
DROP TABLE IF EXISTS admin_users;
CREATE TABLE admin_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Isi data awal
-- --------------------------------------------------------
INSERT INTO admin_users (username, password) VALUES
('admin', 'admin123'),
('supervisor', 'super123');
