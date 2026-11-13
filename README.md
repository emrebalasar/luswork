# Kurumsal Firma Yönetim Paneli - Teknik Değerlendirme Projesi

Merhaba! Bu proje, temel PHP bilgisi, kod organizasyonu ve temel web geliştirme pratiklerini değerlendirmek üzere hazırlanmış başlangıç seviyesinde bir vaka çalışmasıdır.

Depo içerisinde temel sayfalar (`login.php`, `dashboard.php`, `logout.php`) başlangıç şablonu olarak bırakılmıştır.

---

## 🎯 Projenin Amacı
Mevcut şablonu geliştirerek admin panelinde dinamik bir **Duyuru Yönetimi** akışı oluşturmak.

---

## 🛠️ Teknik Kurallar & Beklentiler

- **PHP:** Düz (Vanilla) PHP kullanılmalıdır. Ekstra paket veya framework gereksinimi yoktur.
- **Veri Saklama:** Veriler basit bir SQLite veritabanında (PDO ile), MySQL'de veya pratik olması açısından bir `data/announcements.json` dosyasında saklanabilir.
- **Güvenlik Refleksleri:**
  - Ekrana basılan kullanıcı verilerinde XSS önlemi (`htmlspecialchars`).
  - Veritabanı kullanılacaksa SQL Injection önlemi (Prepared Statements).
- **Tasarım:** Tasarımın mükemmel olması beklenmemektedir; mevcut sade HTML/CSS yapısı veya basit bir stil yeterlidir.

---

## 🚀 Çalışma Akışı & Teslim Kuralları (Git Workflow)

1. `main` dalına doğrudan commit atmayınız.
2. Bu görev için `feature/announcements-crud` adında bir branch açınız.
3. Görevi tamamladığınızda `main` dalına bir **Pull Request (PR)** oluşturunuz.
4. Anlaşılır commit mesajları kullanmaya özen gösteriniz.

---

## 📋 Görev: Dashboard'a Dinamik Duyuru Ekleme ve Listeleme

Mevcut `dashboard.php` sayfasında yer alan statik tabloyu dinamik hale getirmeniz beklenmektedir:

### Beklenen Maddeler:
- [ ] **Ekleme Formu:** `dashboard.php` sayfasına (veya `announcement-add.php` şeklinde ayrı bir sayfaya) bir duyuru ekleme formu oluşturulmalı.
  - **Alanlar:** 
    - Başlık (Metin - Zorunlu)
    - İçerik (Metin Alanı / Textarea - Zorunlu)
    - Durum (Seçim: `Aktif` / `Pasif` - Varsayılan: Aktif)
- [ ] **Validasyon:** Form gönderildiğinde sunucu tarafında (backend) boş alan kontrolü yapılmalı. Boş alan varsa kullanıcıya anlaşılır bir hata mesajı verilmeli.
- [ ] **Kayıt:** Geçerli veriler veri kaynağına (SQLite, MySQL veya JSON dosyası) eklenmeli ve otomatik bir ID ile oluşturulma tarihi atanmalıdır.
- [ ] **Dinamik Listeleme:** Eklenen tüm duyurular `dashboard.php` tablosunda en yeniden en eskiye doğru dinamik olarak listelenmelidir.
- [ ] **XSS Koruması:** Kullanıcıdan gelen başlık ve içerik ekrana yazdırılırken zararlı HTML/JS kodlarını engellemek için filtrelenmelidir (`htmlspecialchars`).

---

## ⚙️ Kurulum & Çalıştırma

Projeyi yerel ortamınızda çalıştırmak için:

```bash
# Proje dizininde PHP Dahili Sunucusunu başlatın:
php -S localhost:8000

# Tarayıcınızdan açın:
# http://localhost:8000 (Otomatik olarak login.php ekranına yönlendirir)
```

Giriş için mevcut varsayılan bilgiler:
- **Kullanıcı Adı:** `admin`
- **Şifre:** `123456`

---

## 📝 Aday Notları (Teslim Ederken Doldurunuz)

1. **Geliştirme ne kadar sürdü?**
   - *Cevabınız:*
2. **Veri saklama için ne tercih ettiniz (SQLite, MySQL, JSON)? Neden?**
   - *Cevabınız:*
3. **Eklemek veya geliştirmek istediğiniz başka bir detay var mı?**
   - *Cevabınız:*
