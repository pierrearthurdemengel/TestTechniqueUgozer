<template>
  <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg transition-transform duration-500 ease-in-out transform hover:scale-105">
    <h1 class="text-3xl font-extrabold mb-6 text-blue-600 animate-fade-in">
      Créer un nouvel article
    </h1>
    <form @submit.prevent="createArticle">
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
      <button type="submit" class="btn bg-gradient-to-r from-green-500 to-green-700 hover:from-green-700 hover:to-green-900 text-white py-2 px-4 rounded-md shadow-lg transition-transform transform hover:scale-105 ease-in-out duration-300">
        Créer
      </button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';
import { ref } from 'vue';
import { useRouter } from 'vue-router';

export default {
  name: 'ArticleCreate',
  setup() {
    const router = useRouter();
    const title = ref('');
    const category = ref('');
    const content = ref('');
    const published = ref(false);
    const image = ref(null);

    const createArticle = async () => {
      const formData = new FormData();
      formData.append('title', title.value);
      formData.append('category', category.value);
      formData.append('content', content.value);
      formData.append('published', published.value ? 1 : 0);
      if (image.value) {
        formData.append('image', image.value);
      }

      console.log('Sending create request with data:', {
        title: title.value,
        category: category.value,
        content: content.value,
        published: published.value,
        image: image.value,
      });

      try {
        const response = await axios.post('/api/articles', formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });
        console.log('Article created successfully:', response.data);
        router.push('/articles');
      } catch (error) {
        console.error('Erreur lors de la création de l\'article :', error.response ? error.response.data : error);
      }
    };

    const handleFileUpload = (event) => {
      image.value = event.target.files[0];
      console.log('Fichier téléchargé :', image.value);
    };

    return {
      title,
      category,
      content,
      published,
      image,
      createArticle,
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
}

h1 {
  font-family: 'Montserrat', sans-serif;
}

.form-input,
.form-textarea {
  border: 2px solid transparent;
  padding: 0.75rem;
  transition: border 0.3s ease;
}

.form-input:focus,
.form-textarea:focus {
  border: 2px solid #3b82f6;
  outline: none;
}

.btn {
  background-color: #3b82f6;
  color: #fff;
  padding: 0.75rem 1.5rem;
  border-radius: 0.375rem;
  transition: transform 0.3s ease, background-color 0.3s ease;
  cursor: pointer;
}

.btn:hover {
  background-color: #2563eb;
  transform: scale(1.05);
}

.btn:focus {
  outline: none;
  box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.5);
}
</style>