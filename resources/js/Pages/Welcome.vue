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
                    question: "Quel est l’objectif de Mediummm ?",
                    answer: "Mediummm c’est un projet collaboratif de d'apprentissage basé sur un système de cartes mémoire. L'objectif c’est de vous permettre d’apprendre n’importe quoi de manière efficace.",
                },
                {
                    id: 2,
                    question: "Pourquoi le système de cartes mémoire est-il efficace ?",
                    answer: "La méthode des cartes mémoire (ou flash cards) est un moyen efficace et reconnu d’enrichir ses connaissances mais surtout de les conserver.\n" +
                        "Les cartes sont facilement compréhensibles car simples ou accompagnées de ressources comme un schéma ou une image. Une fois apprises, elles sont répétées périodiquement (sur des durées de plus en plus grandes) pour rester durablement dans votre tête."
                },
                {
                    id: 3,
                    question: "A qui s’adresse l’application ?",
                    answer: "Tous ceux qui souhaitent apprendre des choses sur un sujet sans perdre de temps et sans passer par des encyclopédies ou des articles peu fiables."
                },
                {
                    id: 4,
                    question: "Qui crée le contenu ?",
                    answer: "Les decks de cartes sont créés par des utilisateurs bénévoles. N’importe qui peut ajouter du contenu pour participer au projet et partager ses connaissances. Certains decks sont aussi générés automatiquement à partir d'informations trouvables sur le web. \n" +
                        "Les contributeurs importants peuvent aussi recevoir des contreparties sous forme de produits dérivés."
                },
                {
                    id: 5,
                    question: "Qui juge l’efficacité de ces cartes ?",
                    answer: "Tout le monde peut créer du contenu en suivant nos règles d’édition. N’importe quel utilisateur peut donc aussi donner une note à un deck qu’il a consulté pour témoigner de son efficacité."
                },
                {
                    id: 6,
                    question: "Comment s’assurer de la fiabilité des informations ?",
                    answer: "Comme expliqué précédemment, notre charte éditoriale doit être suivie lors de la création de contenu. Cette dernière implique que chaque fait avancé doit être sourcé et que plus une idée possède de sources diverses et fiables, plus elle sera mise en avant. N’importe qui peut créer des cartes mais aussi les modifier si nécessaire."
                },
                {
                    id: 7,
                    question: "Puis-je créer des cartes privées ?",
                    answer: "Tout à fait, en plus des cartes publiques, qui doivent respecter notre charte éditoriale, vous pouvez créer des cartes uniquement accessibles par vous et les personnes à qui vous les avez partagées."
                },
                {
                    id: 8,
                    question: "C’est gratuit ?",
                    answer: "Les cartes et informations de Mediummm seront toujours accessibles gratuitement sans limitation dans le nombre de consultations, vous pouvez aussi les partager sans restriction. Certaines fonctionnalités de l’app sont payantes."
                },
                {
                    id: 9,
                    question: "Comment le projet est-il viable ?",
                    answer: "Mediummm est un projet collaboratif, sa viabilité est assurée via des dons, des ventes de produits dérivés (goodies, decks physiques) ainsi que quelques publicités discrètes."
                },
                {
                    id: 10,
                    question: "Quels thèmes sont abordés sur l’app ?",
                    answer: "Tous les thèmes sont les bienvenus sur l’application du moment qu’ils respectent notre charte éditoriale.\n" +
                        "Dans un premier temps, Mediumm se concentrera sur des sujets spécifiques afin de pouvoir garantir du contenu."
                },
                {
                    id: 11,
                    question: "Comment accéder à Mediummm ?",
                    answer: "Le projet est encore en cours de création, il suffira cependant de télécharger l’application pour en profiter.\n" +
                        "Vous pouvez dès à présent nous donner notre adresse mail afin que nous vous contactions lors du lancement de Mediummm."
                },
                {
                    id: 12,
                    question: "Comment participer au projet ?",
                    answer: "Pour nous soutenir gratuitement, vous pouvez créer des articles, les corriger, les noter, vérifier les sources ou encore améliorer leur efficacité.\n" +
                        "Vous pouvez aussi nous soutenir financièrement en faisant un don ou en achetant des produits dérivés."
                },
                {
                    id: 13,
                    question: "Quand Mediummm sera-t-il accessible ?",
                    answer: "Pour être informé de la sortie de Mediummm, le mieux reste de renseigner votre adresse mail plus haut sur la page (promis on ne spamme pas)."
                }
            ]
        }
    }
})
</script>
