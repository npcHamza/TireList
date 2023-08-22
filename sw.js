self.addEventListener('install', (e) => {
  e.waitUntil(
    caches.open('tire-stok').then((cache) => cache.addAll([
      '',
      'index.php',
    ])),
  );
});

self.addEventListener('fetch', (e) => {
  console.log(e.request.url);
  e.respondWith(
    caches.match(e.request).then((response) => response || fetch(e.request)),
  );
});