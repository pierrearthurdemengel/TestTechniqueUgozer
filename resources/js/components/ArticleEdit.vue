<template>
  <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg transition-transform duration-500 ease-in-out transform hover:scale-105">
    <h1 class="text-3xl font-extrabold mb-6 text-blue-600 animate-fade-in">
      Modifier l'article
    </h1>
    <form @submit.prevent="updateArticle">
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Titre</label>
        <input type="text" v-model="title" class="form-control border-2 border-gray-200 p-2 w-full rounded-md focus:ring focus:ring-blue-200 focus:outline-none transition-shadow duration-300" required>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Catégorie</label>
        <input type="text" v-model="category" class="form-control border-2 border-gray-200 p-2 w-full rounded-md focus:ring focus:ring-blue-200 focus:outline-none transition-shadow duration-300" required>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Contenu</label>
        <textarea v-model="content" class="form-control border-2 border-gray-200 p-2 w-full rounded-md focus:ring focus:ring-blue-200 focus:outline-none transition-shadow duration-300" required></textarea>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Image</label>
        <input type="file" @change="handleFileUpload" class="form-control border-2 border-gray-200 p-2 w-full rounded-md focus:ring focus:ring-blue-200 focus:outline-none transition-shadow duration-300">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-medium mb-2">Publié</label>
        <input type="checkbox" v-model="published" class="form-checkbox text-blue-600 h-5 w-5">
      </div>
      <div class="flex justify-between items-center">
        <button type="submit" class="btn bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-700 hover:to-blue-900 text-white py-2 px-4 rounded-md shadow-lg transition-transform transform hover:scale-105 ease-in-out duration-300">
          Mettre à jour
        </button>
        <router-link to="/articles" class="btn-back mt-6 inline-block px-6 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">
          Retour à la liste des articles
        </router-link>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';

export default {
  name: 'ArticleEdit',
  setup() {
    const route = useRoute();
    const router = useRouter();
    const title = ref('');
    const category = ref('');
    const content = ref('');
    const published = ref(false);
    const image = ref(null);

    const fetchArticle = async () => {
      try {
        const response = await axios.get(`/api/articles/${route.params.id}`);
        title.value = response.data.title;
        category.value = response.data.category;
        content.value = response.data.content;
        published.value = response.data.published;
        console.log('Fetched article data:', response.data);
      } catch (error) {
        console.error('Erreur lors de la récupération de l\'article :', error);
      }
    };

    const updateArticle = async () => {
      const formData = new FormData();
      formData.append('title', title.value);
      formData.append('category', category.value);
      formData.append('content', content.value);
      formData.append('published', published.value ? 1 : 0);
      if (image.value) {
        formData.append('image', image.value);
      }
      formData.append('_method', 'PATCH'); // pour contourner la 422 "Unprocessable Content"

      console.log('Sending update request with data:', {
        title: title.value,
        category: category.value,
        content: content.value,
        published: published.value,
        image: image.value,
      });

      try {
        const response = await axios.post(`/api/articles/${route.params.id}`, formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });
        console.log('Update successful:', response.data);
        router.push('/articles');
      } catch (error) {
        console.error('Erreur lors de la mise à jour de l\'article :', error.response ? error.response.data : error);
      }
    };

    const handleFileUpload = (event) => {
      image.value = event.target.files[0];
      console.log('Fichier téléchargé :', image.value);
    };

    onMounted(fetchArticle);

    return {
      title,
      category,
      content,
      published,
      image,
      updateArticle,
      handleFileUpload
    };
  },
};
</script>

<style scoped>
.container {
  background: #f9fafb;
  border-radius: 10px;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  transition: transform 0.5s ease;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem;
  border-radius: 0.375rem;
  border: 2px solid #e2e8f0;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
  border-color: #4299e1;
  box-shadow: 0 0 0 4px rgba(66, 153, 225, 0.5);
}

button {
  padding: 0.75rem 1.5rem;
  color: #fff;
  background-color: #3182ce;
  border-radius: 0.375rem;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

button:hover {
  background-color: #2b6cb0;
  transform: translateY(-3px);
}

.animate-fade-in {
  animation: fade-in 1s ease-out forwards;
}

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
</style>
