<template>
  <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-blue-50 to-blue-100 animate-fade-in">
    <div class="text-center p-6 bg-white shadow-xl rounded-lg transform hover:scale-105 transition-transform duration-500 hover:shadow-2xl">
      <h1 class="text-5xl font-extrabold text-blue-600 animate-slide-in mb-4">
        Bienvenue sur mon Blog
      </h1>
      <p class="mt-4 text-xl text-gray-700 animate-fade-in-delayed">
        Découvrez les derniers articles et mises à jour.
      </p>
      <router-link to="/articles" class="mt-8 inline-block px-8 py-3 text-white bg-gradient-to-r from-blue-500 to-blue-700 rounded-full hover:from-blue-700 hover:to-blue-900 transition duration-300 transform hover:scale-110 shadow-lg">
        Voir les Articles
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home',
};
</script>

<style scoped>
/* Animation Fade-in */
@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fade-in-delayed {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in {
  animation: fade-in 1s ease-out forwards;
}

.animate-fade-in-delayed {
  animation: fade-in-delayed 1.5s ease-out forwards;
}

/* Animation Slide-in */
@keyframes slide-in {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.animate-slide-in {
  animation: slide-in 1s ease-out forwards;
}

/* Styles pour le bouton */
.bg-gradient-to-r {
  background-image: linear-gradient(to right, var(--tw-gradient-stops));
}

.from-blue-50 {
  --tw-gradient-from: #ebf8ff;
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(235, 248, 255, 0));
}

.to-blue-100 {
  --tw-gradient-to: #bee3f8;
}

.from-blue-500 {
  --tw-gradient-from: #4299e1;
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(66, 153, 225, 0));
}

.to-blue-700 {
  --tw-gradient-to: #2b6cb0;
}

.from-blue-700 {
  --tw-gradient-from: #2b6cb0;
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(43, 108, 176, 0));
}

.to-blue-900 {
  --tw-gradient-to: #1a365d;
}

.shadow-xl {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.shadow-2xl {
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}
</style>
