<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Project;
use App\Models\ProjectChallengeSolution;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section = Project::first();

        $faqs = [
            [
                "link" => "https://youtu.be/5CLmRIHR5Zw",
                "sort" => 1,
                "title_ar" =>"وكالة إبداعية",
                "title_en" =>"Creative Agency",
                "slug_ar" =>"وكالة-إبداعية",
                "slug_en" =>"creative-agency",
                "description_ar" =>"تآزر العلاقات الضريبية للموارد عبر الأسواق المتخصصة. زراعة خدمة العملاء من خلال أفكار قوية. تبسيط المقاييس المتمحورة حول المستخدم قبل الهياكل الرأسية. ابتكار منتجات مصنعة ممكّنة بينما المنصات الموازية.",
                "description_en" =>"Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically
                streamline user-centric metrics before vertical architectures. Objectively innovate empowered manufactured products whereas parallel platforms.",
                "challenge_en"=>"Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Taking seamless key performance indicators offline to maximise the long tail.",
                "challenge_ar"=>"إدارة التغيير التشغيلي للبودكاست داخل سير العمل لإنشاء إطار عمل. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل. الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "overview_en" =>"Keeping your eye on the ball while performing a deep dive on the start-up mentality to convergence on cross-platform integration. Derive convergence on cross-platform integration taking seamless key performance indicators offline to maximise the long tail.",
                "overview_ar" =>"الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. اشتقاق التقارب على التكامل عبر الأنظمة الأساسية من خلال أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "country_en" => "United States",
                "country_ar" => "الولايات المتحدة",
                "cost" => "150499",
                "industry"=>"IT Solution, Design",
                "client" => "Microsoft Holing Ltd.",
                "core_technologies" => "iOS/ PHP/ Laravel/ Git",
                'project_category_id' => 1,
                'media' => [
                    [
                        'name'            => 'portfolio-item-1',
                        'mime_type'       => 'image/jpg',
                        'uploaded_by'     => 1,
                        'size'	          => 123,
                        'uploadable_type' => Project::class,
                        'identifier'      => 'image',
                        'url'             => '/storage/project/portfolio-item-1.jpg'
                    ]
                ]

            ],
            [
               "link" => "https://youtu.be/5CLmRIHR5Zw",
                "sort" => 2,
                "title_ar" =>"تطوير الويب",
                "title_en" =>"Web Development",
                "slug_ar" =>"تطوير-الويب",
                "slug_en" =>"web-development",
                "description_ar" =>"تآزر العلاقات الضريبية للموارد عبر الأسواق المتخصصة. زراعة خدمة العملاء من خلال أفكار قوية. تبسيط المقاييس المتمحورة حول المستخدم قبل الهياكل الرأسية. ابتكار منتجات مصنعة ممكّنة بينما المنصات الموازية.",
                "description_en" =>"Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically
                streamline user-centric metrics before vertical architectures. Objectively innovate empowered manufactured products whereas parallel platforms.",
                "challenge_en"=>"Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Taking seamless key performance indicators offline to maximise the long tail.",
                "challenge_ar"=>"إدارة التغيير التشغيلي للبودكاست داخل سير العمل لإنشاء إطار عمل. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل. الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "overview_en" =>"Keeping your eye on the ball while performing a deep dive on the start-up mentality to convergence on cross-platform integration. Derive convergence on cross-platform integration taking seamless key performance indicators offline to maximise the long tail.",
                "overview_ar" =>"الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. اشتقاق التقارب على التكامل عبر الأنظمة الأساسية من خلال أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "country_en" => "United States",
                "country_ar" => "الولايات المتحدة",
                "cost" => "160499",
                "industry"=>"IT Solution, Design",
                "client" => "Microsoft Holing Ltd.",
                "core_technologies" => "iOS/ PHP/ Laravel/ Git",
                'project_category_id' => 2,
                'media' => [
                [
                    'name'            => 'portfolio-item-2',
                    'mime_type'       => 'image/jpg',
                    'uploaded_by'     => 1,
                    'size'	          => 123,
                    'uploadable_type' => Project::class,
                    'identifier'      => 'image',
                    'url'             => '/storage/project/portfolio-item-2.jpg'
                    ]
                ]
            ],
            [
                "link" => "https://youtu.be/5CLmRIHR5Zw",
                "sort" => 3,
                "title_ar" =>"ترقية البنية التحتية",
                "title_en" =>"Infrastructure Upgrade",
                "slug_ar" =>"ترقية-البنية-التحتية",
                "slug_en" =>"infrastructure-upgrade",
                "description_ar" =>"تآزر العلاقات الضريبية للموارد عبر الأسواق المتخصصة. زراعة خدمة العملاء من خلال أفكار قوية. تبسيط المقاييس المتمحورة حول المستخدم قبل الهياكل الرأسية. ابتكار منتجات مصنعة ممكّنة بينما المنصات الموازية.",
                "description_en" =>"Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically
                streamline user-centric metrics before vertical architectures. Objectively innovate empowered manufactured products whereas parallel platforms.",
                "challenge_en"=>"Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Taking seamless key performance indicators offline to maximise the long tail.",
                "challenge_ar"=>"إدارة التغيير التشغيلي للبودكاست داخل سير العمل لإنشاء إطار عمل. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل. الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "overview_en" =>"Keeping your eye on the ball while performing a deep dive on the start-up mentality to convergence on cross-platform integration. Derive convergence on cross-platform integration taking seamless key performance indicators offline to maximise the long tail.",
                "overview_ar" =>"الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. اشتقاق التقارب على التكامل عبر الأنظمة الأساسية من خلال أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "country_en" => "United States",
                "country_ar" => "الولايات المتحدة",
                "cost" => "170499",
                "industry"=>"IT Solution, Design",
                "client" => "Microsoft Holing Ltd.",
                "core_technologies" => "iOS/ PHP/ Laravel/ Git",
                'project_category_id' => 3,
                'media' => [
                [
                    'name'            => 'portfolio-item-3',
                    'mime_type'       => 'image/jpg',
                    'uploaded_by'     => 1,
                    'size'	          => 123,
                    'uploadable_type' => Project::class,
                    'identifier'      => 'image',
                    'url'             => '/storage/project/portfolio-item-3.jpg'
                    ]
                ]
            ],
            [
               "link" => "https://youtu.be/5CLmRIHR5Zw",
                "sort" => 4,
                "title_ar" =>"وكالة إبداعية 2",
                "title_en" =>"Creative Agency 2",
                "slug_ar" =>"وكالة-إبداعية-2",
                "slug_en" =>"creative-agency-2",
                "description_ar" =>"تآزر العلاقات الضريبية للموارد عبر الأسواق المتخصصة. زراعة خدمة العملاء من خلال أفكار قوية. تبسيط المقاييس المتمحورة حول المستخدم قبل الهياكل الرأسية. ابتكار منتجات مصنعة ممكّنة بينما المنصات الموازية.",
                "description_en" =>"Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically
                streamline user-centric metrics before vertical architectures. Objectively innovate empowered manufactured products whereas parallel platforms.",
                "challenge_en"=>"Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Taking seamless key performance indicators offline to maximise the long tail.",
                "challenge_ar"=>"إدارة التغيير التشغيلي للبودكاست داخل سير العمل لإنشاء إطار عمل. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل. الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "overview_en" =>"Keeping your eye on the ball while performing a deep dive on the start-up mentality to convergence on cross-platform integration. Derive convergence on cross-platform integration taking seamless key performance indicators offline to maximise the long tail.",
                "overview_ar" =>"الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. اشتقاق التقارب على التكامل عبر الأنظمة الأساسية من خلال أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "country_en" => "United States",
                "country_ar" => "الولايات المتحدة",
                "cost" => "180499",
                "industry"=>"IT Solution, Design",
                "client" => "Microsoft Holing Ltd.",
                "core_technologies" => "iOS/ PHP/ Laravel/ Git",
                'project_category_id' => 4,
                'media' => [
                [
                    'name'            => 'portfolio-item-4',
                    'mime_type'       => 'image/jpg',
                    'uploaded_by'     => 1,
                    'size'	          => 123,
                    'uploadable_type' => Project::class,
                    'identifier'      => 'image',
                    'url'             => '/storage/project/portfolio-item-4.jpg'
                    ]
                ]
            ],
            [
                "link" => "https://youtu.be/5CLmRIHR5Zw",
                "sort" => 5,
                "title_ar" =>"تطوير الويب 2",
                "title_en" =>"Web Development 2",
                "slug_ar" =>"تطوير-الويب-2",
                "slug_en" =>"web-development-2",
                "description_ar" =>"تآزر العلاقات الضريبية للموارد عبر الأسواق المتخصصة. زراعة خدمة العملاء من خلال أفكار قوية. تبسيط المقاييس المتمحورة حول المستخدم قبل الهياكل الرأسية. ابتكار منتجات مصنعة ممكّنة بينما المنصات الموازية.",
                "description_en" =>"Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically
                streamline user-centric metrics before vertical architectures. Objectively innovate empowered manufactured products whereas parallel platforms.",
                "challenge_en"=>"Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Taking seamless key performance indicators offline to maximise the long tail.",
                "challenge_ar"=>"إدارة التغيير التشغيلي للبودكاست داخل سير العمل لإنشاء إطار عمل. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل. الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "overview_en" =>"Keeping your eye on the ball while performing a deep dive on the start-up mentality to convergence on cross-platform integration. Derive convergence on cross-platform integration taking seamless key performance indicators offline to maximise the long tail.",
                "overview_ar" =>"الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. اشتقاق التقارب على التكامل عبر الأنظمة الأساسية من خلال أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "country_en" => "United States",
                "country_ar" => "الولايات المتحدة",
                "cost" => "190499",
                "industry"=>"IT Solution, Design",
                "client" => "Microsoft Holing Ltd.",
                "core_technologies" => "iOS/ PHP/ Laravel/ Git",
                'project_category_id' => 5,
                'media' => [
                [
                    'name'            => 'portfolio-item-5',
                    'mime_type'       => 'image/jpg',
                    'uploaded_by'     => 1,
                    'size'	          => 123,
                    'uploadable_type' => Project::class,
                    'identifier'      => 'image',
                    'url'             => '/storage/project/portfolio-item-5.jpg'
                    ]
                ]
            ],
            
            [
                "link" => "https://youtu.be/5CLmRIHR5Zw",
                "sort" => 6,
                "title_ar" =>"تصوير البيانات",
                "title_en" =>"Data Visualization",
                "slug_ar" =>"تصوير-البيانات",
                "slug_en" =>"data-visualization",
                "description_ar" =>"تآزر العلاقات الضريبية للموارد عبر الأسواق المتخصصة. زراعة خدمة العملاء من خلال أفكار قوية. تبسيط المقاييس المتمحورة حول المستخدم قبل الهياكل الرأسية. ابتكار منتجات مصنعة ممكّنة بينما المنصات الموازية.",
                "description_en" =>"Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically
                streamline user-centric metrics before vertical architectures. Objectively innovate empowered manufactured products whereas parallel platforms.",
                "challenge_en"=>"Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration. Taking seamless key performance indicators offline to maximise the long tail.",
                "challenge_ar"=>"إدارة التغيير التشغيلي للبودكاست داخل سير العمل لإنشاء إطار عمل. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل. الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "overview_en" =>"Keeping your eye on the ball while performing a deep dive on the start-up mentality to convergence on cross-platform integration. Derive convergence on cross-platform integration taking seamless key performance indicators offline to maximise the long tail.",
                "overview_ar" =>"الحفاظ على تركيزك على الكرة أثناء إجراء تحليل عميق على عقلية بدء التشغيل لاشتقاق التقارب على التكامل عبر الأنظمة الأساسية. اشتقاق التقارب على التكامل عبر الأنظمة الأساسية من خلال أخذ مؤشرات الأداء الرئيسية بسلاسة في وضع عدم الاتصال لتعظيم الذيل الطويل.",
                "country_en" => "United States",
                "country_ar" => "الولايات المتحدة",
                "cost" => "151499",
                "industry"=>"IT Solution, Design",
                "client" => "Microsoft Holing Ltd.",
                "core_technologies" => "iOS/ PHP/ Laravel/ Git",
                'project_category_id' => 5,
                'media' => [
                    [
                    'name'            => 'portfolio-item-5',
                    'mime_type'       => 'image/jpg',
                    'uploaded_by'     => 1,
                    'size'	          => 123,
                    'uploadable_type' => Project::class,
                    'identifier'      => 'image',
                    'url'             => '/storage/project/portfolio-item-2-1.jpg'
                    ]
                ]
            ],
        ];
        $project_challenge_solutions = [
            [
                "title_ar" => "توثيق الأهداف قصيرة وطويلة المدى.",
                "title_en" => " Document the short and long term goals.",
                "sort" => 1,
            ],
            [
                "title_ar" => "أتمتة خطوط تطوير البرمجيات.",
                "title_en" => "Automated development pipelines.",
                "sort" => 2,
            ],
            [
                "title_ar" => "ابتكار موضوعي ممكّن.",
                "title_en" => "Objectively innovate empowered.",
                "sort" => 3,
            ],
            [
                "title_ar" => "اختبار شامل ومرن.",
                "title_en" => "Predominate extensible testing.",
                "sort" => 4,
            ],
            [
                "title_ar" => "توثيق الأهداف قصيرة وطويلة المدى.",
                "title_en" => "Document the short and long term goals.",
                "sort" => 4,
            ],
            [
                "title_ar" => "أتمتة خطوط تطوير البرمجيات.",
                "title_en" => "Automated development pipelines.",
                "sort" => 4,
            ],
            [
                "title_ar" => "ابتكار موضوعي ممكّن.",
                "title_en" => "Objectively innovate empowered.",
                "sort" => 4,
            ],
            [
                "title_ar" => "اختبار شامل ومرن.",
                "title_en" => "Predominate extensible testing.",
                "sort" => 4,
            ]
        ];

        foreach ($faqs as $faq) {
            $model = Project::create([
                'title_ar' => $faq['title_ar'],
                'title_en' => $faq['title_en'],
                'slug_ar' => $faq['slug_ar'],
                'slug_en' => $faq['slug_en'],
                'description_ar' => $faq['description_ar'],
                'description_en' => $faq['description_en'],
                'challenge_ar' => $faq['challenge_ar'],
                'challenge_en' => $faq['challenge_en'],
                'overview_ar' => $faq['overview_ar'],
                'overview_en' => $faq['overview_en'],
                'country_ar' => $faq['country_ar'],
                'country_en' => $faq['country_en'],
                'cost' => $faq['cost'],
                'industry' => $faq['industry'],
                'client' => $faq['client'],
                'core_technologies' => $faq['core_technologies'],
                'project_category_id' => $faq['project_category_id'],
                "link" => $faq['link'],
                "sort" => $faq['sort'],
            ]);
            if (isset($faq['media']) && is_array($faq['media'])) {
                foreach ($faq['media'] as $media) {
                    $model->media()->create($media);
                }
            }
            foreach ($project_challenge_solutions as $solution) {
                ProjectChallengeSolution::create([
                    'title_ar' => $solution['title_ar'],
                    'title_en' => $solution['title_en'],
                    'sort' => $solution['sort'],
                    'status' => true,
                    'project_id' => $model->id
                ]);
            }

        }
    }

}