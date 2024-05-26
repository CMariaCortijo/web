-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2024 a las 15:19:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_sakura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Velas'),
(2, 'Facial'),
(3, 'Corporal'),
(4, 'Packs'),
(5, 'Jabones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_pedidos1`
--

CREATE TABLE `lineas_pedidos1` (
  `id` int(255) NOT NULL,
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `unidades` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lineas_pedidos1`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `coste` float(200,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float(100,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `oferta` varchar(2) DEFAULT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `oferta`, `fecha`, `imagen`) VALUES
(1, 1, 'Luces de Luna<br><span style=\"font-size: 15px;\">Vela</span>', 'Las velas de cera de abeja son elaboradas con ingredientes naturales y duraderos, que proporcionan una luz suave y envolvente. Su aroma a miel y vainilla crea un ambiente cálido y relajante, perfecto para disfrutar de momentos de tranquilidad y paz. Estas velas son ideales para decorar y ambientar cualquier espacio, ya sea en el hogar o en eventos especiales. Su suave fragancia y luz tenue las convierten en el complemento perfecto para crear una atmósfera acogedora y placentera en cualquier ocasión.\r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n\r\n\r\n', 10.00, 2, NULL, '2024-05-25', 'Default_beauty_products_candle_with_sakura_flowers_1.jpg'),
(2, 1, 'Oasis de Tranquilidad<br><span style=\"font-size: 15px;\">Vela</span>', 'Una vela con fragancias de cítricos y madera de cedro, perfecta para crear un refugio de paz en tu hogar.\r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 10.00, 4, NULL, '2024-05-25', 'Default_beauty_products_candle_with_sakura_flowers_without_let_2(2).jpg'),
(3, 1, 'Sakura Dream<br><span style=\"font-size: 15px;\">Vela</span>', 'Inspirada en los jardines japoneses en primavera, esta vela está hecha con pétalos de flor de cerezo y tiene un aroma fresco y florar que calma los sentidos e invita a la relajación. <br>Perfecta para usar en momentos de meditación o para crear un ambiente acogedor en casa.\r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 10.00, 7, NULL, '2024-05-25', 'Default_beauty_products_candle_with_sakura_flowers_without_let_3(1).jpg'),
(4, 1, 'Luz Brillante<br><span style=\"font-size: 15px;\">Portavelas</span>', 'Un elegante y sencillo porta velas hecho a mano con madera natural, perfecto para darle un toque acogedor a cualquier ambiente. Con capacidad para una vela grande, este portavelas añadirá calidez y estilo a tu hogar\r\n.<br>\r\n<br> ¿Quieres saber más acerca de el ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br>\r\n<a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 12.00, 16, NULL, '2024-05-25', 'Default_beauty_products_candle_with_sakura_flowers_without_let_3.jpg'),
(5, 2, 'Vitality Glow<br><span style=\"font-size: 15px;\">Crema de día</span>', '<span style=\"font-size: 15px;\">Crema de día</span>\r\n<br>\r\n<br>\r\nTe presentamos Vitality Glow una crema de día, ligera y enriquecedora con ingredientes como vitamina C y ácido hialurónico para promover la luminosidad y la hidratación de la piel durante el día. Ideal para pieles normales a mixtas.\r\n<br>\r\n\r\n<br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 20.00, 19, NULL, '2024-05-25', 'Default_a_beauty_body_product_with_sakura_flowers_3.jpg'),
(6, 2, 'Renewing Treatment<br><span style=\"font-size: 15px;\">Crema de noche</span>', '<span style=\"font-size: 15px;\">Crema noche, 50ml</span>\r\n<br>\r\n<br>\r\nTe presentamos Renewing Treatment una crema de noche,  nutritiva y regeneradora con retinol y péptidos para estimular la renovación celular y combatir los signos de envejecimiento durante la noche. Recomendada para pieles secas y maduras.\r\n<br> \r\n<br>\r\n¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n<br>\r\n<br>\r\n<a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 14.00, 13, NULL, '2024-05-25', 'Default_beauty_products_facial_with_sakura_flowers_0.jpg'),
(7, 2, 'Daily Defense Shield<br><span style=\"font-size: 15px;\">Crema de día</span>', '<span style=\"font-size: 15px;\">Crema de día, 50ml</span>\r\n<br>\r\n<br>Te presentamos Daily Defense Shield una crema protectora con SPF 30 y antioxidantes como la vitamina E y té verde para proteger la piel de los daños causados por los rayos UV y los radicales libres. <br>Adecuada para todo tipo de pieles.\r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>', 13.00, 6, NULL, '2024-05-25', 'Default_beauty_facial_products_with_sakura_flowers_without_te_1(1).jpg'),
(8, 2, 'Restorative Repair<br><span style=\"font-size: 15px;\">Aceite reparador</span>', '<span style=\"font-size: 15px;\">Aceite reparador, 50ml</span>\r\n<br>\r\n<br>Te presentamos Restorative Repair capad de reparar y calmar tu piel. <br> Contiene aceite de rosa mosqueta y aloe vera para revitalizar y calmar la piel después de un día agitado.\r\n <br>Perfecta para pieles sensibles y con tendencia a irritaciones.\r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>', 28.00, 5, NULL, '2024-05-25', 'Default_beauty_body_oils_products_elegant_with_sakura_flowers_1.jpg'),
(9, 4, 'Pack solar<br><span style=\"font-size: 15px;\">Solar</span>', '<span style=\"font-size: 15px;\">Crema solar factor 50, 100ml <br> Agua térmica, 200ml</span>\r\n<br>\r\n<br>\r\nTe presentamos el pack solar, incluye 3 productos esenciales para disfrutar del sol de forma segura y protegida. <br>Incluye una crema solar de amplio espectro con factor de protección alto para proteger la piel de los rayos UVA y UVB y una botella de agua térmica para mantenerse hidratado durante la exposición al sol.<br><br> Este pack es ideal para llevar a la playa, la piscina o cualquier actividad al aire libre, garantizando una protección completa para toda la familia.<br>\r\n<br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>', 50.00, 3, NULL, '2024-05-25', 'Default_beauty_body_products_with_sakura_flowers_0.jpg'),
(10, 1, 'Sándalo místico<br><span style=\"font-size: 15px;\">Vela</span>', '<span style=\"font-size: 15px;\">Vela</span>\r\n<br>\r\n<br>Déjate querer por esta  fragancia cálida y envolvente, es perfecta para crear un ambiente de paz y armonía en tu hogar. <br>Enciende esta vela para meditar, relajarte o simplemente para disfrutar de un momento de tranquilidad. <br>El sándalo es conocido por sus propiedades relajantes y es utilizado en la aromaterapia para calmar la mente y el espíritu. <br>Deja que esta vela te guíe en un viaje hacia tu interior, donde podrás encontrar la serenidad y la claridad que tanto necesitas. <br>\r\n<br><br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 10.00, 3, NULL, '2024-05-25', 'Default_beauty_products_candle_with_sakura_flowers_2.jpg'),
(11, 5, 'Cherry Blossom Bliss<br><span style=\"font-size: 15px;\">Jabón</span>', '<span style=\"font-size: 15px;\">Jabón artesanal, 1 unidad</span>\r\n<br>\r\n<br>Disfruta de la suavidad y frescura de la flor de cerezo en este jabón artesanal. Con propiedades hidratantes y antioxidantes, este jabón protege la piel de los radicales libres y le otorga un brillo natural \r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n\r\n\r\n\r\n', 5.00, 2, NULL, '2024-05-25', 'Default_same_photos_with_flowers_sakura_3.jpg'),
(12, 5, 'Sakura Embrace<br><span style=\"font-size: 15px;\">Jabón</span>', '<span style=\"font-size: 15px;\">Jabón artesanal, 1 unidad</span>\r\n<br>\r\n<br>Disfruta de la suavidad y frescura de la flor de cerezo en este jabón artesanal. Con propiedades hidratantes y antioxidantes, este jabón protege la piel de los radicales libres y le otorga un brillo natural \r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n\r\n\r\n\r\n', 5.00, 4, NULL, '2024-05-25', 'Default_same_photos_with_flowers_sakura_2.jpg'),
(13, 5, 'Blossom Beauty<br><span style=\"font-size: 15px;\">Jabón</span>', '<span style=\"font-size: 15px;\">Jabón artesanal, 1 unidad</span>\r\n<br>\r\n<br>Disfruta de la suavidad y frescura de la flor de cerezo en este jabón artesanal. Con propiedades hidratantes y antioxidantes, este jabón protege la piel de los radicales libres y le otorga un brillo natural \r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n\r\n\r\n\r\n', 5.00, 4, NULL, '2024-05-25', 'Default_beauty_products_with_sakura_flowers_1.jpg'),
(14, 5, 'Cherry Blossom Delight<br><span style=\"font-size: 15px;\">Jabón</span>', '<span style=\"font-size: 15px;\">Jabón artesanal, 1 unidad</span>\r\n<br>\r\n<br>Disfruta de la suavidad y frescura de la flor de cerezo en este jabón artesanal. Con propiedades hidratantes y antioxidantes, este jabón protege la piel de los radicales libres y le otorga un brillo natural \r\n<br> <br>¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n\r\n\r\n\r\n', 5.00, 4, NULL, '2024-05-25', 'Default_a_beauty_produc_with_logo_is_a_sakura_petal_1.jpg'),
(15, 3, 'Restorative Repair<br><span style=\"font-size: 15px;\">Aceite reparador, 50ml</span>', '<span style=\"font-size: 15px;\">Aceite reparador, 50ml</span>\r\n<br>\r\n<br>Te presentamos Restorative Repair capad de reparar y calmar tu piel.\r\nContiene aceite de rosa mosqueta y aloe vera para revitalizar y calmar la piel después de un día agitado.<br>\r\nPerfecta para pieles sensibles y con tendencia a irritaciones.\r\n<br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 26.00, 2, NULL, '2024-05-25', '1.jpg'),
(16, 4, 'Glowing Skin<br><span style=\"font-size: 15px;\">Pack rejuvenecedor</span>', '<span style=\"font-size: 15px;\">Serum reparador, 50ml<br>Mascarilla facial, 200ml<br> Crema hidratante, 50ml</span>\r\n<br>\r\n<br>Te presentamos este pack incluye una crema hidratante iluminadora, un serum revitalizante y una mascarilla facial purificante. Ideal para conseguir una piel radiante y rejuvenecida.\r\n<br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>', 44.00, 3, NULL, '2024-05-25', 'Default_a_beauty_body_products_with_sakura_flowers_without_let_2.jpg'),
(17, 4, 'Naturally Beautiful<br><span style=\"font-size: 15px;\">Pack esencial</span>', '<span style=\"font-size: 15px;\">Tónico reparador, 50ml<br>Crema hidratante, 100ml<br>Limpiador facial, 50ml</span>\r\n<br>\r\n<br>Te presentamos \r\n<br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 56.00, 4, NULL, '2024-05-25', 'Default_a_beauty_body_products_with_sakura_flowers_without_let_3.jpg'),
(18, 4, ' Suero Radiante<br><span style=\"font-size: 15px;\">Pack Serum</span>', '<span style=\"font-size: 15px;\">Serum reparador noche, 50ml<br>\r\nSerum iluminador día, 50ml\r\n</span>\r\n<br>\r\n<br>Te presentamos \r\n<br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 55.00, 7, NULL, '2024-05-25', 'Default_beauty_facial_products_with_sakura_flowers_without_let_2.jpg'),
(19, 3, 'Luxurious spa shower<br><span style=\"font-size: 15px;\">Ducha</span>', '<span style=\"font-size: 15px;\">Aceite de ducha, 100ml<br>\r\nExfoliante corporal, 100ml</span>\r\n<br>\r\n<br>Indispensable para nuestro momento más tranquilo, un aceite ligero y sedoso que limpia suavemente la piel, dejándola suave e hidratada. <br>Su fórmula enriquecida con aceites naturales nutre en profundidad y aporta luminosidad a la piel.\r\ny un exfoliante suave y cremoso que elimina las impurezas y células muertas de la piel, dejándola suave y renovada. <br>Su textura delicada y enriquecida con ingredientes naturales como azúcar de caña y aceites esenciales, estimula la circulación y revitaliza la piel, dejándola radiante y luminosa.\r\n<br>\r\n<br> ¿Quieres saber más acerca de ella ó necesitas asesoramiento?, contáctanos en nuestro correo y te responderemos lo antes posible:\r\n\r\n<br>\r\n<br><a href=\"mailto:sakurapetalasesoramiento@gmail.com\">Contacta con nosotros</a>\r\n', 40.00, 5, NULL, '2024-05-25', '3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `rol`, `imagen`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', 'contraseña', 'admin', NULL),

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas_pedidos1`
--
ALTER TABLE `lineas_pedidos1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_linea_pedido` (`pedido_id`),
  ADD KEY `fk_linea_producto` (`producto_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedido_usuario` (`usuario_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto_categoria` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `lineas_pedidos1`
--
ALTER TABLE `lineas_pedidos1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lineas_pedidos1`
--
ALTER TABLE `lineas_pedidos1`
  ADD CONSTRAINT `fk_linea_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `fk_linea_producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
