-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2024 às 20:06
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_livros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bookss`
--

CREATE TABLE `bookss` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `ano_de_publicacao` date NOT NULL,
  `capa` varchar(100) NOT NULL,
  `sinope` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `bookss`
--

INSERT INTO `bookss` (`id`, `titulo`, `genero`, `autor`, `editora`, `ano_de_publicacao`, `capa`, `sinope`) VALUES
(8, 'Inteligência Humilhada', 'Ficção', 'Jonas Madureira', 'Vida Nova', '2024-10-09', 'https://m.media-amazon.com/images/I/61mrM7YJwAL.jpg', ''),
(11, 'Os sete princípios de SALOMÃO', 'Cristão', 'BRUCE FLEET', 'Lua de Papel', '2024-10-10', 'https://m.media-amazon.com/images/I/419hN6XI9lL._AC_SY200_QL15_.jpg', ''),
(28, 'O silencio de Adão ', 'Cristão', 'LARRY CRABB', 'Vida Nova', '2024-12-12', 'https://down-br.img.susercontent.com/file/sg-11134201-7rbkv-lpaydb2eff4n62', ''),
(31, 'Cristianismo puro simples ', 'Cristão', 'C.S LEWIS', 'Thomas Nelson', '2024-12-12', 'https://m.media-amazon.com/images/I/81R+HyKqtwL._AC_UF1000,1000_QL80_.jpg', ''),
(32, 'A PIRÂMIDE DA SABEDORIA ', 'Cristão', 'BRETT McCRACKEN', 'Jesuscopy', '2022-12-12', 'https://m.media-amazon.com/images/I/61TGuH72RmL._AC_UF1000,1000_QL80_.jpg', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(56) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `phone`, `email`, `password`, `name`, `level`) VALUES
(23, '11998487270', 'alexspassoni@gmail.com', '$2y$10$5jXQW8056kAktlhPoGYsOeNRA1GOcb5N7SXeIFBvFxyCLfV/dppSy', 'Alex Sandro Passoni', 0),
(24, '11913110799', 'anacpassoni@gmail.com', '$2y$10$2ow7PuP65eF9dFgYhPwlGeu.IVip7apfd4aQ43tocH69i9JNaFUOm', 'Ana Maria Cardoso Passoni', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `bookss`
--
ALTER TABLE `bookss`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bookss`
--
ALTER TABLE `bookss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
