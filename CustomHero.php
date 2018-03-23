<?php

class CustomHero
{
    private $wp_customize;

    public static function Register($wp_customize) {
        $customizer = new CustomHero();

        $customizer->wp_customize = $wp_customize;

        $customizer->SetupSection()->SetupSettings()->SetupControls();
    }

    private function SetupSection() {
        $this->wp_customize->add_section('bbenefield_Hero', array(
            'title'     => 'Hero',
            'priority'  => 30,
        ) );

        return $this;
    }

    private function SetupSettings() {
        $this->wp_customize->add_setting('bbenefield_Hero_HeroButton', array(
            'default' => 'Contact'
        ));


        return $this;
    }

    private function SetupControls() {
        $this->wp_customize->add_control( new WP_Customize_Control( $this->wp_customize, 'bbenefield_Hero_HeroButtonControl', array(
            'label' => 'Hero Button',
            'section' => 'bbenefield_Hero',
            'settings' => 'bbenefield_Hero_HeroButton',
        ) ) );


        return $this;
    }
}