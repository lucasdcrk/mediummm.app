<template>
    <Head title="Rendre l'apprentissage accessible" />

    <div class="relative overflow-hidden">
        <Popover as="header" class="relative">
            <div class="bg-gray-900 pt-6">
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                    <div class="flex items-center flex-1">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a v-if="false" href="#">
                                <span class="sr-only">Workflow</span>
                                <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="" />
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <PopoverButton class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white">
                                    <span class="sr-only">Open main menu</span>
                                    <MenuIcon class="h-6 w-6" aria-hidden="true" />
                                </PopoverButton>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                <PopoverPanel focus class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div v-if="false">
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </PopoverPanel>
            </transition>
        </Popover>

        <main>
            <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                <div class="mx-auto max-w-7xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                            <div class="lg:py-24">
                                <h1 class="mt-4 text-2xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-5xl lg:mt-6 xl:text-5xl">
                                    <span class="block">L'apprentissage de qualité,</span>
                                    <span class="block text-indigo-400">accessible et participatif.</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                    Plus besoin d’arpenter les encyclopédies en ligne pour trouver des informations fiables, présentées efficacement. Des cartes mémoire, sur tous les sujets, rappelées régulièrement pour que vous soyez toujours au sommet.
                                </p>
                                <div class="mt-10 sm:mt-12">
                                    <form action="https://app.us5.list-manage.com/subscribe/post?u=253ee71d8db840fef60890101&amp;id=41be7d49d6" method="post" target="_blank" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                        <div class="sm:flex">
                                            <div class="min-w-0 flex-1">
                                                <label for="email" class="sr-only">Email address</label>
                                                <input id="email" name="EMAIL" type="email" placeholder="Entrez votre adresse email" class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900" />
                                            </div>
                                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                                <button type="submit" class="block w-full py-3 px-4 rounded-md shadow bg-indigo-500 text-white font-medium hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">S'inscrire</button>
                                            </div>
                                        </div>
                                        <p class="mt-3 text-sm text-gray-300 sm:mt-4">Restez informés sur le lancement de Mediummm grâce à notre newsletter.</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                                <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-full" src="/img/undraw/undraw_mobile_app_re_catg.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <div class="lg:max-w-2xl lg:mx-auto lg:text-center">
                        <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            Questions fréquentes
                        </h2>
                        <p class="mt-4 text-gray-400">Les réponses à vos questions le plus fréquentes.</p>
                    </div>
                    <div class="mt-20">
                        <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-10">
                            <div v-for="faq in faqs" :key="faq.id">
                                <dt class="font-semibold text-white">
                                    {{ faq.question }}
                                </dt>
                                <dd class="mt-3 text-gray-400">
                                    {{ faq.answer }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'
import { MenuIcon, XIcon } from '@heroicons/vue/outline'
import { ChevronRightIcon } from '@heroicons/vue/solid'

export default defineComponent({
    components: {
        Head,
        Link,
        Popover,
        PopoverButton,
        PopoverPanel,
        ChevronRightIcon,
        MenuIcon,
        XIcon
    },
    data() {
        return {
            faqs: [
                {
                    id: 1,
                    question: "What's the best thing about Switzerland?",
                    answer:
                        "I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.",
                },
            ]
        }
    }
})
</script>
