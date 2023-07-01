CREATE TABLE `data_barang` (
id INT PRIMARY KEY AUTO_INCREMENT,
  kode VARCHAR(100),
  nama VARCHAR(100),
  harga VARCHAR(100),
  stok  VARCHAR(15)
);

INSERT INTO `data_barang` (`kode`, `nama`, `harga`, `stok`) VALUES
('B001', 'Baju Hitam', '60000', '99'),
('B002', 'Kemeja Putih', '100000', '25'),
('B003', 'Kemeja Pantai', '120000', '5');
