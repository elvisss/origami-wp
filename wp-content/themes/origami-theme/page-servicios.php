<?php
/**
 * Template Name: Servicios
 */
  get_header();
?>

<section class="full-section" id="main-section">
  <div id="services-section">
    <div class="bg-full-section" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
    <div class="wrap-services">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-6">
            <?php if (have_posts()) : ?>
              <?php the_post(); ?>
              <?php the_content(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fluid-section">
  <div class="section-triangles" id="benefits-main">
    <div class="wrap-benefits wrap-triangles">
      <div class="container-fluid">
        <div class="top-benefits">
          <h2>Beneficios Principales</h2>
        </div>
        <div class="boxes-benefits row no-gutters justify-content-center">

          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'posts_per_page' => 100, 'paged' => $paged,'post_type' => 'beneficio', 'orderby' => 'date', 'order' => 'ASC' );
            $postslist = new WP_Query( $args );
            $postslist2 = new WP_Query( $args );

            $idc = 0;

            if ( $postslist->have_posts() ) :
              while ( $postslist->have_posts() ) : $postslist->the_post();
          ?>

              <?php if($idc == 12): ?>

                <div class="col box-benefit">&nbsp;</div>

              <?php endif; ?>

              <?php if( get_field('beneficio_destacado') ): ?>

                <div class="col box-benefit main-benefit">
                  <div class="row no-gutters justify-content-center">
                    <div class="order-2 col-6 col-sm-5 col-md-4 col-lg-12">
                      <figure>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                      </figure>
                    </div>
                    <div class="order-1 col-6 col-sm-5 col-md-4 d-block d-lg-none">
                      <ul>
                        <?php
                          if ( $postslist2->have_posts() ) :
                            while ( $postslist2->have_posts() ) : $postslist2->the_post(); ?>
                              <?php if ( !get_field('beneficio_destacado') ): ?>
                                <li><?php echo get_the_title(); ?></li>
                              <?php endif; ?>
                        <?php
                            endwhile;
                          endif;
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>

              <?php else: ?>

                <div class="col box-benefit">
                  <figure>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    <figcaption><?php echo get_the_title(); ?></figcaption>
                  </figure>
                </div>

              <?php endif; ?>

          <?php
              $idc++; endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="members-main">
  <div class="line-members">
    <h4>MEMBRESÍAS</h4>
  </div>
  <div class="boxes-plans">
    <div class="bg-plan bg-first-accordion row no-gutters" id="first-accordion" role="tablist">
      <div class="card col-12 col-md-6 content-plan">
        <div class="card-header" id="headingOne" role="tab">
          <h2 class="mb-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">MEMBRESIA BASIC
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#first-accordion">
          <div class="card-body box-plan">
            <h2>MEMBRESIA BASIC</h2>
            <div class="plan-content-price">
              <div class="plan-price">$200</div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Trae tu computadora portátil, encuentra un lugar libre y comienza a trabajar.</p>
            </div>
            <ul class="plan-details">
              <li>
                <div class="plan-detail">Beneficios generales</div>
              </li>
              <li>
                <div class="plan-detail">Escritorio flexible</div>
              </li>
              <li>
                <p>(Asiento en cualquier lugar que se acomode a tu forma de trabajo)</p>
              </li>
              <li>
                <div class="plan-detail">Autoservicio cafetería</div>
              </li>
              <li>
                <p>(café, té y agua)</p>
              </li>
              <li>
                <div class="plan-detail">Welcome pack</div>
              </li>
              <li>
                <p>(materiales básicos de escritorio)</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card col-12 col-md-6 content-plan last-content-plan">
        <div class="card-header" id="headingTwo" role="tab">
          <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">MEMBRESIA PREMIUM
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#first-accordion">
          <div class="card-body box-plan">
            <h2>MEMBRESIA PREMIUM</h2>
            <div class="plan-content-price">
              <div class="plan-price">$300</div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Trae tu computadora portátil y con seguridad tendrás un espacio fijo para empezar a trabajar.</p>
            </div>
            <ul class="plan-details">
              <li>
                <div class="plan-detail">Beneficios generales</div>
              </li>
              <li>
                <div class="plan-detail">Escritorio flexible</div>
              </li>
              <li>
                <p>(Reservado)</p>
              </li>
              <li>
                <div class="plan-detail">Estacionamiento para visitas</div>
              </li>
              <li>
                <div class="plan-detail">Autoservicio cafetería</div>
              </li>
              <li>
                <p>(café, té y agua)</p>
              </li>
              <li>
                <div class="plan-detail">Welcome pack</div>
              </li>
              <li>
                <p>(Agenda y materiales básicos de escritorio)</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="line-members">
    <h4 class="line-small">SALAS DE REUNIONES, DIRECTORIO Y AUDITORIO</h4>
  </div>
  <div class="boxes-plans">
    <div class="bg-plan bg-second-accordion row no-gutters" id="second-accordion" role="tablist">
      <div class="card col-12 col-md-4 content-plan">
        <div class="card-header" id="headingOne2" role="tab">
          <h2 class="mb-0"><a data-toggle="collapse" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">SALA DE REUNIONES ORIGAMI I &amp; II
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse show" id="collapseOne2" role="tabpanel" aria-labelledby="headingOne2" data-parent="#second-accordion">
          <div class="card-body box-plan">
            <h2>SALA DE REUNIONES ORIGAMI I &amp; II</h2>
            <div class="plan-content-price">
              <div class="plan-price">$30</div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Sala para todo tipo de reuniones de coordinación.</p>
              <p>Está situado en el 6to piso dentro de nuestras oficinas de Origami.</p>
              <div class="sub-review">
                <p><b>Aforo:&nbsp;</b><span>6 personas</span></p>
                <p><b>Fecha y Horario de Uso:</b><br><span>L – V de 09:00 hrs – 18:00 hrs<br>S de 09:00 hrs – 12:00 hrs</span></p>
                <p><b>Tiempo de Separación:</b><br><span>1 día hábil de anticipación</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card col-12 col-md-4 content-plan">
        <div class="card-header" id="headingTwo2" role="tab">
          <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">DIRECTORIO I &amp; II
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse" id="collapseTwo2" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#second-accordion">
          <div class="card-body box-plan">
            <h2>DIRECTORIO I &amp; II</h2>
            <div class="plan-content-price">
              <div class="plan-price">$40</div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Sala para todo tipo de reuniones de coordinación.</p>
              <p>Está situado en el 13vo piso dentro del Edificio Prime Tower.</p>
              <div class="sub-review">
                <p><b>Aforo:&nbsp;</b><span>10 personas</span></p>
                <p><b>Fecha y Horario de Uso:</b><br><span>L – V de 09:00 hrs – 18:00 hrs</span></p>
                <p><b>Tiempo de Separación:</b><br><span>2 días hábiles de anticipación</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card col-12 col-md-4 content-plan last-content-plan">
        <div class="card-header" id="headingThree2" role="tab">
          <h2 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">AUDITORIO SUM
              <div class="accordion-ico">
                <div class="horizontal"></div>
                <div class="vertical"></div>
              </div></a></h2>
        </div>
        <div class="collapse" id="collapseThree2" role="tabpanel" aria-labelledby="headingThree2" data-parent="#second-accordion">
          <div class="card-body box-plan">
            <h2>DIRECTORIO I &amp; II</h2>
            <div class="plan-content-price">
              <div class="plan-price">$80</div>
              <div class="plan-taxes">(NO INCLUYE IGV 18%)</div>
            </div>
            <div class="plan-review">
              <p>Es perfecto para eventos de lanzamiento, reuniones anuales de planeación, talleres o eventos networking.</p>
              <p>Está situado en el 13vo piso en el Edificio</p>
              <div class="sub-review">
                <p><b>Aforo:&nbsp;</b><span>40 perrsonas</span></p>
                <p><b>Fecha y Horario de Uso:</b><br><span>L – V de 09:00 hrs – 18:00 hrs</span></p>
                <p><b>Tiempo de Separación:</b><br><span>2 días hábiles de anticipación</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>