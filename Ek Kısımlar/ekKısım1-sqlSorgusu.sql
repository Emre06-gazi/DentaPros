CREATE TABLE urunler (
    urun_id INT AUTO_INCREMENT PRIMARY KEY,
    grup_adi VARCHAR(255),
    urun_adi VARCHAR(255),
    birimi VARCHAR(50),
    guncel_stok INT
);
INSERT INTO urunler (grup_adi, urun_adi, birimi, guncel_stok) VALUES
('Elektronik', 'Akıllı Telefon', 'Adet', 50),
('Giyim', 'Kazak', 'Adet', 30),
('Ev Aletleri', 'Çamaşır Makinesi', 'Adet', 20),
('Kozmetik', 'Parfüm', 'Adet', 40),
('Ev Aletleri', 'Bulaşık Makinesi', 'Adet', 15);
