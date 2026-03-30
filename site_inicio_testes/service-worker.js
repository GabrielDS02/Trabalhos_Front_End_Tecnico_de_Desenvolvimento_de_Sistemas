/* =====================================================
   Service Worker — MR Prestação de Serviços
   Cache básico para performance e offline mínimo
===================================================== */

const CACHE_NAME = 'Alcateia_do_Ensino-v1';

// Arquivos essenciais do site
const ASSETS = [
  // Páginas principais
  '/',
  '/index.html',
  '/service-worker.js',

  // CSS
  '/css/styles.css',

  // JavaScript
  '/js/script.js',
];

// =======================================
// INSTALAÇÃO — CACHE INICIAL
// =======================================
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('[SW] Cacheando arquivos principais');
        return cache.addAll(ASSETS);
      })
  );
  self.skipWaiting();
});

// =======================================
// ATIVAÇÃO — LIMPA CACHE ANTIGO
// =======================================
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(keys =>
      Promise.all(
        keys.map(key => {
          if (key !== CACHE_NAME) {
            console.log('[SW] Removendo cache antigo:', key);
            return caches.delete(key);
          }
        })
      )
    )
  );
  self.clients.claim();
});

// =======================================
// FETCH — CACHE FIRST + NETWORK FALLBACK
// =======================================
self.addEventListener('fetch', event => {

  // ⚠️ NÃO cacheia PHP (formulários, envio de email)
  if (event.request.url.includes('.php')) {
    return;
  }

  event.respondWith(
    caches.match(event.request).then(response => {
      if (response) {
        return response;
      }

      return fetch(event.request)
        .then(networkResponse => {
          // Só cacheia respostas válidas
          if (
            !networkResponse ||
            networkResponse.status !== 200 ||
            networkResponse.type !== 'basic'
          ) {
            return networkResponse;
          }

          const responseClone = networkResponse.clone();
          caches.open(CACHE_NAME)
            .then(cache => cache.put(event.request, responseClone));

          return networkResponse;
        });
    })
  );
});
