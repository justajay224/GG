<?php

if (!function_exists('format_rupiah')) {
    /**
     * Format an amount to Indonesian Rupiah format.
     *
     * @param int|float $number
     * @return string
     */
    function format_rupiah($number)
    {
        return 'Rp ' . number_format($number, 2, ',', '.');
    }
}
