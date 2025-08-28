# Modern Mobile Menu Animation System

Ez a dokumentáció leírja a SkuloCar projekt modern mobil menü animációs rendszerét, amely JavaScript és Tailwind CSS segítségével készült.

## 🎯 Funkciók

### 📱 Modern Mobil Menü

-   **Slide-in animáció**: A mobil menü jobbról beúszik smooth animációval
-   **Backdrop blur**: A háttér elmosódik a menü megnyitásakor
-   **Staggered animációk**: A menüpontok egymás után jelennek meg
-   **Dropdown submenük**: Kattintásra nyíló almenük animációval
-   **Touch swipe**: Swipe gesture a menü bezárásához
-   **ESC gomb támogatás**: Billentyűzet navigáció
-   **Body scroll lock**: A menü nyitott állapotában a háttér nem görgethető
-   **Ripple effektek**: Modern touch feedback
-   **Icon animációk**: Hover és click animációk az ikonokon

## 🎨 Design Jellemzők

### Modern UI/UX

-   **Gradient háttér**: Szép átmenetek a menüben
-   **Backdrop blur**: Modern glassmorphism effekt
-   **Rounded corners**: Kifinomult lekerekítések
-   **Shadow effektek**: Mélység érzet
-   **Color scheme**: Sárga accent színek
-   **Typography**: Modern betűtípusok

### Interaktív elemek

-   **Hover states**: Minden elem interaktív
-   **Active states**: Touch feedback
-   **Focus states**: Accessibility támogatás
-   **Loading states**: Betöltési animációk

## 🛠️ Technikai Részletek

### CSS Animációk

```css
/* Slide-in animáció */
@keyframes slideInFromRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

/* Ripple effekt */
@keyframes ripple {
    0% {
        transform: scale(0);
        opacity: 1;
    }
    100% {
        transform: scale(4);
        opacity: 0;
    }
}

/* Pulse animáció */
@keyframes pulse {
    0%,
    100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}
```

### JavaScript Osztály

```javascript
class MobileMenuAnimations {
    constructor() {
        this.mobileMenu = document.getElementById("mobile-menu");
        this.mobileMenuBtn = document.getElementById("mobile-menu-btn");
        this.mobileMenuClose = document.getElementById("mobile-menu-close");
        this.mobileMenuBackdrop = document.getElementById(
            "mobile-menu-backdrop"
        );
        this.mobileDropdowns = document.querySelectorAll(".mobile-dropdown");
        this.menuItems = document.querySelectorAll(".mobile-menu-item");

        this.isOpen = false;
        this.init();
    }
}
```

## 📱 Használat

### 1. HTML Struktúra

```html
<!-- Header -->
<div id="header" class="w-full">
    <div class="header-top bg-red-500 px-3 py-5">
        <div class="flex items-center justify-between">
            <div class="text-white font-bold text-xl">SkuloCar</div>
            <button id="mobile-menu-btn" class="text-white hover:text-gray-200">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
</div>

<!-- Mobile Menu Overlay -->
<div
    id="mobile-menu"
    class="fixed inset-0 z-50 transform translate-x-full menu-transition"
>
    <div
        id="mobile-menu-backdrop"
        class="absolute inset-0 bg-black bg-opacity-50 mobile-menu-backdrop"
    ></div>
    <div
        class="absolute right-0 top-0 h-full w-80 mobile-menu-container shadow-2xl"
    >
        <!-- Menu content -->
    </div>
</div>
```

### 2. JavaScript Inicializálás

```javascript
document.addEventListener("DOMContentLoaded", () => {
    new MobileMenuAnimations();
});
```

## 🎭 Animációs Rendszer

### Menü Nyitás

1. **Backdrop megjelenik** - Fade-in animáció
2. **Menü container slide-in** - Jobbról beúszás
3. **Menüpontok staggered** - Egymás után megjelenés
4. **Body scroll lock** - Háttér letiltása

### Menü Bezárás

1. **Menüpontok eltűnnek** - Fade-out animáció
2. **Container slide-out** - Jobbra kúszás
3. **Backdrop eltűnik** - Fade-out
4. **Body scroll unlock** - Háttér engedélyezése

### Dropdown Animációk

-   **Arrow rotáció** - 180 fok elfordulás
-   **Submenu slide-in** - Fentről leúszás
-   **Staggered items** - Egymás után megjelenés

## 📱 Touch Gesture Támogatás

### Swipe Bezárás

```javascript
setupTouchGestures() {
    let startX = 0;
    let currentX = 0;

    this.mobileMenu?.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
    });

    this.mobileMenu?.addEventListener("touchmove", (e) => {
        if (!this.isOpen) return;

        currentX = e.touches[0].clientX;
        const diffX = startX - currentX;

        if (diffX > 0) {
            e.preventDefault();
            const translateX = Math.max(-diffX, -320);
            this.mobileMenu.style.transform = `translateX(${translateX}px)`;
        }
    });
}
```

## 🎨 CSS Osztályok

### Animációs osztályok

```css
.menu-transition          /* Alapvető átmenet (0.3s) */
/* Alapvető átmenet (0.3s) */
.menu-transition-fast     /* Gyors átmenet (0.15s) */
.menu-slide-in           /* Jobbról beúszás */
.menu-item-fade-in       /* Fade-in animáció */
.dropdown-scale-in       /* Scale animáció dropdown-hoz */
.submenu-slide-in        /* Fentről leúszás submenu-hoz */
.menu-item-slide-in; /* Balról beúszás menüpontokhoz */
```

### Mobil menü specifikus

```css
.mobile-menu-backdrop    /* Backdrop blur effekt */
/* Backdrop blur effekt */
.mobile-menu-container   /* Modern gradient háttér */
.mobile-menu-item        /* Mobil menüpont animáció */
.ripple                  /* Ripple effekt */
.pulse-animation; /* Pulse animáció */
```

## 🔧 Testreszabás

### Színek módosítása

```css
:root {
    --bg-primary: lab(2.8% 0.27 0.09);
    --bg-secondary: lab(11.97% 0.95 0.34);
    --line: lab(8.59% 1.48 0.53);
}
```

### Animáció sebesség

```css
.menu-transition {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
```

### Mobil menü szélesség

```css
.mobile-menu-container {
    width: 320px; /* Alapértelmezett: 320px */
}
```

## ♿ Akadálymentesség

### Redukált mozgás támogatás

```css
@media (prefers-reduced-motion: reduce) {
    .menu-transition,
    .menu-transition-fast,
    .dropdown-arrow,
    .mobile-menu-item {
        transition: none;
        animation: none;
    }
}
```

### Magas kontraszt támogatás

```css
@media (prefers-contrast: high) {
    .mobile-menu-backdrop {
        background: rgba(0, 0, 0, 0.9);
    }
}
```

### Billentyűzet navigáció

-   **Tab**: Menüpontok között navigálás
-   **Enter/Space**: Menüpont aktiválása
-   **Escape**: Mobil menü bezárása
-   **Arrow keys**: Dropdown menükben navigálás

## 📱 Responsive Design

### Breakpoint-ok

-   **Mobile**: < 768px - Mobil menü aktív
-   **Tablet**: 768px - 1024px - Mobil menü aktív
-   **Desktop**: > 1024px - Mobil menü aktív (hamburger menü)

### Touch optimalizációk

```css
@media (hover: none) and (pointer: coarse) {
    .mobile-menu-item:hover {
        transform: none;
    }

    .mobile-menu-item:active {
        background: rgba(255, 255, 255, 0.15);
        transform: scale(0.98);
    }
}
```

## 🚀 Teljesítmény

### CSS optimalizációk

-   `transform` és `opacity` használata animációkhoz
-   `will-change` tulajdonság kritikus elemekhez
-   GPU gyorsítás kihasználása
-   Backdrop-filter optimalizáció

### JavaScript optimalizációk

-   Event listener debouncing
-   RAF (RequestAnimationFrame) használata
-   Memóriakezelés
-   Touch event optimalizáció

## 🐛 Hibaelhárítás

### Gyakori problémák

1. **Menü nem nyílik meg**

    - Ellenőrizze az ID-kat (`mobile-menu`, `mobile-menu-btn`)
    - Nézze meg a konzol hibákat
    - Ellenőrizze a JavaScript betöltését

2. **Animációk nem működnek**

    - Ellenőrizze a CSS osztályokat
    - Nézze meg a böngésző támogatást
    - Ellenőrizze a reduced motion beállítást

3. **Touch gesture nem működik**
    - Ellenőrizze a touch event listener-eket
    - Nézze meg a viewport meta tag-et
    - Tesztelje valódi mobil eszközön

### Debug mód

```javascript
// Debug mód bekapcsolása
window.MobileMenuAnimations.debug = true;
```

## 📋 Böngésző támogatás

### Modern böngészők

-   Chrome 88+
-   Firefox 87+
-   Safari 14+
-   Edge 88+

### Fallback-ok

-   Régebbi böngészőkben az animációk nélkül működik
-   CSS Grid helyett Flexbox használata
-   Modern CSS változók helyett fallback színek

## 📄 Licenc

Ez a modern mobil menü animációs rendszer a projekt része és ugyanazokat a licenc feltételeket követi.
