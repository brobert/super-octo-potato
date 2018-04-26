<?php
return [
    [
        'name' => 'index',
        // 'roles' => 'owner',
        'icon' => 'ico-home'
    ],
    [
        'name' => 'users',
        'icon' => 'ico-users2'
    ],
    [
        'name' => 'help',
        'icon' => 'ico-question'
    ],
    [
        'name' => 'landerv2',
        'icon' => 'ico-sitemap',
        'children' => [
            [
                'name' => 'layout',
                'icon' => 'ico-grid',
                'children' => [
                    [
                        'name' => 'layout.default'
                    ],
                    [
                        'name' => 'layout.navbar_collapse'
                    ],
                    [
                        'name' => 'layout.fixed_sidebar'
                    ],
                    [
                        'name' => 'layout.reveal_header'
                    ],
                    [
                        'name' => 'layout.with_footer'
                    ],
                    [
                        'name' => 'layout.fixed_header'
                    ]
                ]
            ],
            [
                'name' => 'widget',
                'icon' => 'ico-tasks'
            ],
            [
                'name' => 'component',
                'icon' => 'ico-screen4',
                'children' => [
                    [
                        'name' => 'component.loading'
                    ],
                    [
                        'name' => 'component.sortable'
                    ],
                    [
                        'name' => 'component.notification'
                    ],
                    [
                        'name' => 'component.button'
                    ],
                    [
                        'name' => 'component.typography'
                    ],
                    [
                        'name' => 'component.tabsaccordion'
                    ],
                    [
                        'name' => 'component.slider'
                    ],
                    [
                        'name' => 'component.animation'
                    ],
                    [
                        'name' => 'component.grid'
                    ],
                    [
                        'name' => 'component.pricing'
                    ],
                    [
                        'name' => 'component.carousel'
                    ],
                    [
                        'name' => 'component.others'
                    ],
                    [
                        'name' => 'component.panel'
                    ],
                    [
                        'name' => 'component.icon'
                    ]
                ]
            ],
            [
                'name' => 'form',
                'icon' => 'ico-file',
                'children' => [
                    [
                        'name' => 'form.fileupload'
                    ],
                    [
                        'name' => 'form.layout'
                    ],
                    [
                        'name' => 'form.wizard'
                    ],
                    [
                        'name' => 'form.imagecrop'
                    ],
                    [
                        'name' => 'form.element'
                    ],
                    [
                        'name' => 'form.wysiwyg'
                    ],
                    [
                        'name' => 'form.xeditable'
                    ],
                    [
                        'name' => 'form.validation'
                    ]
                ]
            ],
            [
                'name' => 'table',
                'icon' => 'ico-table22',
                'children' => [
                    [
                        'name' => 'table.default'
                    ],
                    [
                        'name' => 'table.datatable'
                    ]
                ]
            ],

            [
                'name' => 'page',
                'icon' => 'ico-copy4',
                'children' => [
                    [
                        'name' => 'page.profile'
                    ],
                    [
                        'name' => 'page.register'
                    ],
                    [
                        'name' => 'page.media',
                        'children' => [
                            [
                                'name' => 'page.media.album'
                            ],
                            [
                                'name' => 'page.media.gallery'
                            ]
                        ]
                    ],
                    [
                        'name' => 'page.faq'
                    ],
                    [
                        'name' => 'page.blog',
                        'children' => [
                            [
                                'name' => 'page.blog.default'
                            ],
                            [
                                'name' => 'page.blog.single'
                            ],
                            [
                                'name' => 'page.blog.grid'
                            ]
                        ]
                    ],
                    [
                        'name' => 'page.invoice_printable'
                    ],
                    [
                        'name' => 'page.login_returned'
                    ],
                    [
                        'name' => 'page.invoice'
                    ],
                    [
                        'name' => 'page.error',
                        'children' => [
                            [
                                'name' => 'page.error.404'
                            ],
                            [
                                'name' => 'page.error.403'
                            ],
                            [
                                'name' => 'page.error.500'
                            ]
                        ]
                    ],
                    [
                        'name' => 'page.login'
                    ],
                    [
                        'name' => 'page.calendar'
                    ],
                    [
                        'name' => 'page.email',
                        'children' => [
                            [
                                'name' => 'page.email.inbox'
                            ],
                            [
                                'name' => 'page.email.view'
                            ]
                        ]
                    ],
                    [
                        'name' => 'page.starter'
                    ],
                    [
                        'name' => 'page.timeline_v2'
                    ]
                ]
            ],
            [
                'name' => 'chart',
                'icon' => 'ico-stats-up',
                'children' => [
                    [
                        'name' => 'chart.flot'
                    ]
                ]
            ],
            [
                'name' => 'maps',
                'icon' => 'ico-map3',
                'children' => [
                    [
                        'name' => 'maps.vector'
                    ],
                    [
                        'name' => 'maps.google'
                    ]
                ]
            ]
        ]
    ]

];