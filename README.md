# Kurumsal Firma Yönetim Paneli - Teknik Değerlendirme Projesi

Merhaba! Bu proje, ekibimize katılacak yazılımcıların temel PHP bilgisi, kod organizasyonu, güvenlik yaklaşımları ve problem çözme pratiklerini değerlendirmek üzere hazırlanmış örnek bir vaka çalışmasıdır.

Lütfen başlamadan önce yönergeleri ve beklentileri dikkatlice okuyunuz.

---

## 🎯 Projenin Amacı
Basit bir kurumsal web sitesi için temel seviyede bir **Admin Paneli** geliştirmek. Bu panel üzerinden yetkili kullanıcılar duyuruları/haberleri yönetebilecek ve temel içerik güncellemelerini yapabilecektir.

---

## 🛠️ Teknik Gereksinimler & Kurallar

- **PHP Sürümü:** PHP 8.2+ (Tercihen PHP 8.4 özellikleri desteklenecek şekilde).
- **Veritabanı:** MySQL / MariaDB veya SQLite (PDO kullanılması zorunludur).
- **Kod Standartları:**
  - Dosyaların başında `declare(strict_types=1);` kullanılmalıdır.
  - PSR-12 kodlama standartlarına özen gösterilmelidir.
  - Güvenlik refleksleri (SQL Injection, XSS, CSRF önlemleri) aranacaktır.
- **Frontend / Tasarım:**
  - Tasarımın mükemmel olması beklenmemektedir. Bootstrap, TailwindCSS veya sade/temiz bir CSS yapısı yeterlidir. Fonksiyonellik ve kod kalitesi önceliklidir.

---

## 🚀 Çalışma Akışı & Teslim Kuralları (Git Workflow)

1. Bu depoyu **fork** edin veya yerel ortamınıza klonlayın.
2. `main` dalına doğrudan commit atmayınız.
3. Her bir görev için `feature/<gorev-adi>` şeklinde branch açınız (Örn: `feature/auth`, `feature/announcements-crud`).
4. Her görevi tamamladığınızda `main` dalına bir **Pull Request (PR)** oluşturunuz.
5. Commit mesajlarının ne yapıldığını açık ve anlaşılır biçimde ifade etmesine özen gösteriniz.

---

## 📋 Görev Listesi (Tasks)

Proje 4 aşamalı küçük görevden oluşmaktadır:

### Görev 1: Yetkilendirme & Giriş Sistemi (Auth)
- [ ] Admin kullanıcıları için giriş (Login) ve çıkış (Logout) mekanizması kurulmalı.
- [ ] Şifreler veritabanında güvenli bir şekilde hash'lenmiş olarak saklanmalı (`password_hash` / `password_verify`).
- [ ] Oturum açılmamışsa paneldeki sayfalara erişim engellenmeli ve giriş sayfasına yönlendirilmeli.
- [ ] Formda CSRF token doğrulaması yapılmalıdır.

### Görev 2: Duyuru / İçerik Yönetimi (CRUD)
- [ ] **Listeleme:** Eklenen duyuruların listelendiği bir sayfa (Başlık, Durum, Yayın Tarihi, İşlemler).
- [ ] **Ekleme & Güncelleme:**
  - Alanlar: `Başlık` (Zorunlu, max 255), `İçerik` (Zorunlu), `Durum` (Taslak / Yayında), `Yayın Tarihi`.
  - Sunucu taraflı (backend) validasyon yapılmalı; geçersiz veri geldiğinde kullanıcıya hata mesajları gösterilmeli.
- [ ] **Silme:** Duyuruyu silme işlemi (tercihen onay uyarısı ile).
- [ ] Tüm veritabanı sorgularında **PDO Prepared Statements** kullanılmalıdır.

### Görev 3: Modern PHP & Mimari Dokunuşlar (Refactoring / OOP)
- [ ] Duyuru durumları (Örn: `DRAFT`, `PUBLISHED`, `ARCHIVED`) için **PHP Enum** yapısı kullanılmalı.
- [ ] Veritabanı bağlantısı ve iş mantığı (business logic) birbirinden ayrılmalı (Spagetti/tek dosya kod yerine Controller/Service/Model ayrımına dikkat edilmeli).
- [ ] PHP 8.x özelliklerine (Constructor promotion, Typed properties, match expression vb.) yer verilmeli.

### Görev 4 (Opsiyonel / Bonus): Kapak Görseli Yükleme
- [ ] Duyuru eklerken/düzenlerken bir kapak görseli (`.jpg`, `.png`, `.webp`) yüklenebilmeli.
- [ ] Güvenlik kontrolleri yapılmalı:
  - Sadece geçerli MIME türleri kabul edilmeli.
  - Maksimum dosya boyutu sınırı (örn: 2MB) olmalı.
  - Dosya adı güvenli hale getirilerek kaydedilmeli.

---

## ⚙️ Kurulum & Çalıştırma

Projeyi yerelinizde ayağa kaldırmak için gereken adımları buraya ekleyiniz:

```bash
# Bağımlılıkları yükleme (varsa)
composer install

# Veritabanını oluşturma (database/schema.sql dosyasını içe aktarın)

# PHP Built-in Server ile çalıştırma
php -S localhost:8000 -t public
```

---

## 📝 Aday Notları (Tamamlandığında Doldurunuz)

Lütfen teslim etmeden önce aşağıdaki soruları kısaca yanıtlayınız:

1. **Projeyi geliştirirken ne kadar süre harcadınız?**
   - *Cevabınız:*
2. **Kullandığınız yaklaşım / mimari hakkında kısaca ne söylemek istersiniz?**
   - *Cevabınız:*
3. **Zamanınız daha fazla olsaydı projeye neleri eklemek / neleri iyileştirmek isterdiniz?**
   - *Cevabınız:*
