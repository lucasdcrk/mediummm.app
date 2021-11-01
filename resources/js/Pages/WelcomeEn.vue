<template>
    <Head title="Making learning accessible" />

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
                                    <span class="block">Qualitative learning,</span>
                                    <span class="block text-indigo-400">accessible and participative.</span>
                                </h1>
                                <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                    No longer need to surf over encyclopedias online to find trustable informations. Flash cards, on all subjects, regularly reminded so you're always at the top.
                                </p>
                                <div class="mt-10 sm:mt-12">
                                    <form action="https://app.us5.list-manage.com/subscribe/post?u=253ee71d8db840fef60890101&amp;id=41be7d49d6" method="post" target="_blank" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                        <div class="sm:flex">
                                            <div class="min-w-0 flex-1">
                                                <label for="email" class="sr-only">Email address</label>
                                                <input id="email" name="EMAIL" type="email" placeholder="Enter your email address" class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900" />
                                            </div>
                                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                                <button type="submit" class="block w-full py-3 px-4 rounded-md shadow bg-indigo-500 text-white font-medium hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">Subscribe</button>
                                            </div>
                                        </div>
                                        <p class="mt-3 text-sm text-gray-300 sm:mt-4">Stay updated on Mediummm's launch thanks to our newsletter.</p>
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
                            Frequently asked questions
                        </h2>
                        <p class="mt-4 text-gray-400">The answer to your most commonly asked questions.</p>
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
                        question: "What’s the aim of Mediummm?",
                        answer: "Mediummm is a collaborative learning project based on a flash card system. The goal is to allow you to learn anything effectively.",
                    },
                    {
                        id: 2,
                        question: "Why is the flash card system effective?",
                        answer: "The flash cards method is an effective and recognized way of enriching one's knowledge durably.\n" +
                            "The cards are easy to understand because they are simple or are presented with resources such as a diagram or an image. Once learned, they are repeated periodically (longer periods over time) to stay in your head forever.\n"
                    },
                    {
                        id: 3,
                        question: "Who is the target of the application?",
                        answer: "Anyone who wants to learn something about a subject without wasting time and without going through unreliable articles or encyclopedias."
                    },
                    {
                        id: 4,
                        question: "Who creates the content?",
                        answer: "Card decks are created by volunteers. Anyone can add content to participate in the project and share their knowledge. Some decks are also generated automatically from information found on the web. Significant contributors may also receive counterparties in the form of derivatives."
                    },
                    {
                        id: 5,
                        question: "Who is judging a deck's effectiveness?",
                        answer: "Anyone can create content by following our editing guidelines. Any user can therefore also rate a deck they have read."
                    },
                    {
                        id: 6,
                        question: "Why can we trust Mediummm informations?",
                        answer: "As explained previously, our editorial guidelines must be followed when creating content. These guidelines state that each fact must be sourced and that the more an idea has diverse and reliable sources, the more it will be put forward. Anyone can create cards as well as modify them if necessary."
                    },
                    {
                        id: 7,
                        question: "Can I create private cards?",
                        answer: "Absolutely, in addition to public cards, which must respect our editorial guidelines, you can create cards that are only accessible by you and the people to whom you have shared them."
                    },
                    {
                        id: 8,
                        question: "Is Mediummm free?",
                        answer: "Mediummm's cards and information will always be accessible free of charge without limitation in the number of consultations, you can also share them without restriction. However, some features of the app are paid."
                    },
                    {
                        id: 9,
                        question: "How is the project viable?",
                        answer: "Mediummm is a collaborative project, its viability is ensured through donations, sales of  goodies (such as physical decks) as well as some discreet advertising."
                    },
                    {
                        id: 10,
                        question: "What topics are covered on the app?",
                        answer: "All themes are welcome on the app as long as they respect our editorial guidelines.\n" +
                        "Initially, Mediumm will focus on specific topics in order to be able to guarantee content."
                    },
                    {
                        id: 11,
                        question: "How to access Mediummm?",
                        answer: "The project is still being created, however, you’ll just have to download the application to enjoy it. You can now give us your email address so that we can contact you when Mediummm is launched."
                    },
                    {
                        id: 12,
                        question: "How to participate in the project?",
                        answer: "You can support us for free by creating articles, correcting them, rating them, verifying sources or improving their effectiveness. You can also support us financially by donating or buying derivative products."
                    },
                    {
                        id: 13,
                        question: "When will Mediummm become accessible?",
                        answer: "The best way to stay informed of Mediummm’s release is to enter your email address at the top of the page (we promise not to spam you)."
                    }
                ]
            }
        }
    })
</script>
