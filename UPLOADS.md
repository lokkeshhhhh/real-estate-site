# Image Uploads & Portfolio Management

Nestora is designed to be lightweight and fast. The portfolio deals and images are managed directly via configuration files.

## Adding or Updating Portfolio Deals
1. Open `config/portfolio.php`.
2. Add or edit an array item with the details. Use high-quality Unsplash image URLs or relative paths if you upload images to `public/images/`.
3. To replace a specific city's banner image, update the URL inside `resources/views/pages/locations.blade.php`.

## Updating Profile & Business Card
To personalize the site with your actual photos:
1. **Associate Photo:** Upload your photo as `public/uploads/rohit_photo.jpg`. The About page will look for this file first.
2. **Gokul Kripa Logo:** Upload the logo as `public/uploads/gokul_kripa_logo.png` to display it on the Home and About pages.
3. **Digital Business Card:** Upload `public/uploads/business_card_front.jpg` and `public/uploads/business_card_back.jpg`. Once uploaded, the "Coming Soon" placeholder on the About page will automatically be replaced with your card and a download button.
