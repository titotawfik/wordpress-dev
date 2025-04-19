<?php
$faq = get_field('faq');
if ($faq):
    $faq_schema = []; // Initialize array to hold schema Q&A
?>

    <section id="faq" class="py-5 fade-on-scroll">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4 text-center">
                    <?php if (!empty($faq['heading'])): ?>
                        <h5 class="text-center mb-4 display-6 fw-bold"><?php echo esc_html($faq['heading']); ?></h5>
                    <?php endif; ?>
                    <?php if (!empty($faq['description'])): ?>
                        <p class="lead"><?php echo esc_html($faq['description']); ?></p>
                    <?php endif; ?>

                    <div class="accordion accordion-flush" id="faqAccordion">
                        <?php
                        $index = 0;
                        foreach ($faq as $key => $value) {
                            if (str_starts_with($key, 'q')) {
                                $i = substr($key, 1);
                                $question = $value;
                                $answer = $faq['a' . $i] ?? null;

                                if ($question && $answer):
                                    $index++;
                                    $heading_id = 'faqHeading' . $index;
                                    $collapse_id = 'faqCollapse' . $index;

                                    // Add to FAQ schema array
                                    $faq_schema[] = [
                                        "@type" => "Question",
                                        "name" => wp_strip_all_tags($question),
                                        "acceptedAnswer" => [
                                            "@type" => "Answer",
                                            "text" => wp_kses_post($answer)
                                        ]
                                    ];
                        ?>
                                    <div class="accordion-item">
                                        <h6 class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($collapse_id); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                                <?php echo esc_html($question); ?>
                                            </button>
                                        </h6>
                                        <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo esc_attr($heading_id); ?>" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <?php echo wp_kses_post($answer); ?>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                endif;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Output JSON-LD schema
    if (!empty($faq_schema)):
        $faq_schema_output = [
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => $faq_schema
        ];
    ?>
        <script type="application/ld+json">
            <?php echo wp_json_encode($faq_schema_output, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
        </script>
    <?php endif; ?>

<?php endif; ?>