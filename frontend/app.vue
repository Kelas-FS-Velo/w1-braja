<template>
  <div v-if="pending" class="loading">
    Loading profile...
  </div>
  <div v-else-if="error" class="error">
    Error loading profile: {{ error.message }}
  </div>
  <div v-else class="profile-container">
    <div class="profile-card">
      <div class="image-container">
        <img :src="profile.profile_image" alt="Profile Picture" class="profile-image">
      </div>
      <h1 class="profile-name">Hi! I'm {{ profile.name }}</h1>
      <p class="profile-bio">{{ profile.bio }}</p>
      <div class="social-links">
        <template v-if="profile?.social_links">
          <a v-for="(link, platform) in profile.social_links" :key="platform" 
             :href="link" target="_blank" class="social-link">
            <font-awesome-icon :icon="['fab', getPlatformIcon(platform)]" />
          </a>
        </template>
      </div>
    </div>
  </div>
</template>

<script setup>
const { data: profile, pending, error } = await useFetch('http://localhost:8000/api/profiles/1')

useHead({
  title: 'Braja Santika Profile'
})

const getPlatformIcon = (platform) => {
  const iconMap = {
    twitter: 'twitter',
    github: 'github',
    linkedin: 'linkedin'
  }
  return iconMap[platform] || 'link'
}
</script>

<style scoped>
.loading, .error {
  text-align: center;
  padding: 2rem;
  font-size: 1.2rem;
}

.error {
  color: #e53e3e;
}

.profile-container {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
}

.image-container {
  display: inline-block;
  position: relative;
  margin-bottom: 1.5rem;
}

.profile-image {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid white;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.profile-image:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

.profile-card {
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(10px);
  border-radius: 15px;
  padding: 2rem;
  max-width: 450px;
  width: 100%;
  text-align: center;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  animation: fade-in 0.8s ease-out;
}

.profile-bio {
  font-size: 1.1rem;
  color: #666;
  line-height: 1.6;
  margin-bottom: 2rem;
}

.social-links {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
}

.social-link {
  margin: 0 8px;
  font-size: 24px;
  color: inherit;
}

.social-link:hover {
  color: #2c5282;
  transform: translateY(-2px);
}

.social-link svg {
  font-size: 1.5rem;
  transition: transform 0.3s ease;
}

.social-link:hover svg {
  transform: translateY(-3px);
}

@keyframes gradient {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

@keyframes fade-in {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>