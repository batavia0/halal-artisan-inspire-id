<?php

namespace Illuminate\Foundation;

use Illuminate\Support\Collection;
class Inspiring
{
    /**
     * Get an inspiring quote.
     * Halal brother
     *
     * @return string
     */
    public static function quote()
    {
        return static::quotes()
            ->map(fn ($quote) => static::formatForConsole($quote))
            ->random();
    }

    /**
     * Get the collection of inspiring quotes.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function quotes()
    {
        return Collection::make([
          "Ketahuilah, bahwa ketenangan hati tidak bisa dicapai dengan kekayaan, tetapi dengan keyakinan. - Umar bin Khattab (رضي الله عنه)",
          "Tidak ada kekayaan yang lebih besar daripada kebijaksanaan, tidak ada kekemuliaan yang lebih besar daripada ketawadhu'an. - Ali bin Abi Thalib (رضي الله عنه)",
          "Percayalah, bahwa setiap langkah yang kita ambil di jalan Allah adalah langkah menuju kebahagiaan yang abadi. - Abu Bakr Ash-Shiddiq (رضي الله عنه)",
          "Orang yang paling mulia adalah orang yang memiliki akhlak terbaik. - Aisyah binti Abu Bakr (رضي الله عنها)",
          "Berbicaralah dengan tindakanmu, bukan dengan kata-katamu. - Abdullah bin Umar (رضي الله عنه)",
          "Janganlah berbicara tentang orang lain kecuali dengan kata-kata yang baik. - Abdullah bin Abbas (رضي الله عنه)",
          "Jadilah seperti bunga yang mekar, memberikan keindahan kepada dunia tanpa mengharapkan balasan. - Uthman bin Affan (رضي الله عنه)",
          "Ketahuilah, bahwa kebahagiaan sejati adalah ketenangan hati yang datang dari keimanan. - Talha bin Ubaidillah (رضي الله عنه)",
          "Jangan biarkan harta menguasai dirimu, tetapi kuasailah hartamu dengan kebijaksanaan. - Zubair bin Al-Awwam (رضي الله عنه)",
          "Jadilah pribadi yang berpikiran terbuka, siap untuk belajar dari pengalaman dan pengetahuan. - Abu Hurairah (رضي الله عنه)",
          "Dan Allah adalah sebaik-baik Pemberi rezeki. - Al-Quran (Surah Al-Jumu'ah, 62:11)",
          "Maka sesungguhnya bersama kesulitan ada kemudahan. - Al-Quran (Surah Al-Insyirah, 94:6)",
          "Allah tidak membebani seseorang melainkan sesuai dengan kesanggupannya. - Al-Quran (Surah Al-Baqarah, 2:286)",
          "Allah tidak akan mengubah nasib suatu kaum kecuali kaum itu sendiri yang mengubahnya. - Al-Quran (Surah Ar-Ra'd, 13:11)",
        ]);
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    protected static function formatForConsole($quote)
    {
        [$text, $author] = str($quote)->explode('-');

        return sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($text),
            trim($author),
        );
    }
}
