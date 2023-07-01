CREATE TABLE `data_barang` (
  kode VARCHAR(100),
  nama_barang VARCHAR(100),
  harga_barang VARCHAR(100),
  stok  VARCHAR(15)
);

INSERT INTO `data_barang` (`kode`, `nama_barang`, `harga_barang`, `stok`) VALUES
(`B001`, `Baju Hitam`, `60000`, `99`),
(`B002`, `Kemeja Putih`, `100000`, `25`),
(`B003`, `Kemeja Pantai`, `120000`, `5`);
