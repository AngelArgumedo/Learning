CREATE DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;
CREATE TABLE `Productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `stock` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

ALTER TABLE `Productos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `Productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;