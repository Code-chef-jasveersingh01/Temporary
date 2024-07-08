<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Nationalities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => '{"en": "Afghanistan", "ar": "أفغانستان", "de": "Afghanistan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Åland Islands", "ar": "جزر آيلاند", "de": "Åland-Inseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Albania", "ar": "ألبانيا", "de": "Albanien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Algeria", "ar": "الجزائر", "de": "Algerien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "American Samoa", "ar": "ساموا الأمريكية", "de": "Amerikanisch-Samoa"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Andorra", "ar": "أندورا", "de": "Andorra"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Angola", "ar": "أنغولا", "de": "Angola"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Anguilla", "ar": "أنغويلا", "de": "Anguilla"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Antarctica", "ar": "أنتاركتيكا", "de": "Antarktis"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Antigua and Barbuda", "ar": "أنتيغوا وباربودا", "de": "Antigua und Barbuda"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Argentina", "ar": "الأرجنتين", "de": "Argentinien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Armenia", "ar": "أرمينيا", "de": "Armenien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Aruba", "ar": "أروبا", "de": "Aruba"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Australia", "ar": "استراليا", "de": "Australien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Austria", "ar": "النمسا", "de": "Österreich"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Azerbaijan", "ar": "أذربيجان", "de": "Aserbaidschan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bahamas", "ar": "جزر البهاما", "de": "Bahamas"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bahrain", "ar": "البحرين", "de": "Bahrain"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bangladesh", "ar": "بنغلاديش", "de": "Bangladesch"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Barbados", "ar": "بربادوس", "de": "Barbados"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Belarus", "ar": "بيلاروسيا", "de": "Weißrussland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Belgium", "ar": "بلجيكا", "de": "Belgien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Belize", "ar": "بليز", "de": "Belize"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Benin", "ar": "بنين", "de": "Benin"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bermuda", "ar": "برمودا", "de": "Bermuda"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bhutan", "ar": "بوتان", "de": "Bhutan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Plurinational State of Bolivia", "ar": "دولة بوليفيا المتعددة القوميات", "de": "Plurinationaler Staat Bolivien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bonaire, Sint Eustatius and Saba", "ar": "بونير وسانت يوستاتيوس وسابا", "de": "Bonaire, Sint Eustatius und Saba"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bosnia and Herzegovina", "ar": "البوسنة والهرسك", "de": "Bosnien und Herzegowina"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Botswana", "ar": "بوتسوانا", "de": "Botswana"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bouvet Island", "ar": "جزيرة بوفيت", "de": "Bouvetinsel"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Brazil", "ar": "البرازيل", "de": "Brasilien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "British Indian Ocean Territory", "ar": "إقليم المحيط الهندي البريطاني", "de": "Britisches Territorium im Indischen Ozean"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Brunei Darussalam", "ar": "بروناي", "de": "Brunei Darussalam"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Bulgaria", "ar": "بلغاريا", "de": "Bulgarien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Burkina Faso", "ar": "بوركينا فاسو", "de": "Burkina Faso"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Burundi", "ar": "بوروندي", "de": "Burundi"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cambodia", "ar": "كمبوديا", "de": "Kambodscha"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cameroon", "ar": "الكاميرون", "de": "Kamerun"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Canada", "ar": "كندا", "de": "Kanada"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cape Verde", "ar": "الرأس الأخضر", "de": "Kap Verde"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cayman Islands", "ar": "جزر كايمان", "de": "Cayman-Inseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Central African Republic", "ar": "جمهورية أفريقيا الوسطى", "de": "Zentralafrikanische Republik"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Chad", "ar": "تشاد", "de": "Tschad"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Chile", "ar": "تشيلي", "de": "Chile"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "China", "ar": "الصين", "de": "China"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Christmas Island", "ar": "جزيرة كريسماس", "de": "Weihnachtsinsel"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cocos (Keeling) Islands", "ar": "جزر كوكوس (كيلينغ)", "de": "Kokosinseln (Keeling)"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Colombia", "ar": "كولومبيا", "de": "Kolumbien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'name' => '{"en": "Comoros", "ar": "جزر القمر", "de": "Komoren"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Congo", "ar": "الكونغو", "de": "Kongo"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "the Democratic Republic of the Congo", "ar": "جمهورية الكونغو الديمقراطية", "de": "die Demokratische Republik Kongo"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cook Islands", "ar": "جزر كوك", "de": "Cookinseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Costa Rica", "ar": "كوستاريكا", "de": "Costa Rica"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Côte d\'Ivoire", "ar": "كوت ديفوار", "de": "Côte d\'Ivoire"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Croatia", "ar": "كرواتيا", "de": "Kroatien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cuba", "ar": "كوبا", "de": "Kuba"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Curaçao", "ar": "كوراساو", "de": "Curaçao"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Cyprus", "ar": "قبرص", "de": "Zypern"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Czech Republic", "ar": "جمهورية التشيك", "de": "Tschechische Republik"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Denmark", "ar": "الدنمارك", "de": "Dänemark"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Djibouti", "ar": "جيبوتي", "de": "Dschibuti"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Dominica", "ar": "دومينيكا", "de": "Dominica"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Dominican Republic", "ar": "جمهورية الدومينيكان", "de": "Dominikanische Republik"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Ecuador", "ar": "الاكوادور", "de": "Ecuador"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Egypt", "ar": "مصر", "de": "Ägypten"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "El Salvador", "ar": "السلفادور", "de": "El Salvador"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Equatorial Guinea", "ar": "غينيا الاستوائية", "de": "Äquatorialguinea"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Eritrea", "ar": "إريتريا", "de": "Eritrea"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Estonia", "ar": "إستونيا", "de": "Estland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Ethiopia", "ar": "إثيوبيا", "de": "Äthiopien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Falkland Islands (Malvinas)", "ar": "جزر فوكلاند (مالفيناس)", "de": "Falklandinseln (Malwinen)"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Faroe Islands", "ar": "جزر فارو", "de": "Färöer Inseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Fiji", "ar": "فيجي", "de": "Fidschi"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Finland", "ar": "فنلندا", "de": "Finnland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "France", "ar": "فرنسا", "de": "Frankreich"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "French Guiana", "ar": "غيانا الفرنسية", "de": "Französisch-Guayana"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "French Polynesia", "ar": "بولينيزيا الفرنسية", "de": "Französisch-Polynesien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "French Southern Territories", "ar": "الأقاليم الجنوبية الفرنسية", "de": "Französische Südterritorien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Gabon", "ar": "الغابون", "de": "Gabun"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Gambia", "ar": "غامبيا", "de": "Gambia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Georgia", "ar": "جورجيا", "de": "Georgien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Germany", "ar": "غامبيا", "de": "Deutschland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Ghana", "ar": "غانا", "de": "Ghana"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Gibraltar", "ar": "جبل طارق", "de": "Gibraltar"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Greece", "ar": "غواتيمالا", "de": "Griechenland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Greenland", "ar": "غرينلاند", "de": "Grönland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Grenada", "ar": "غرينادا", "de": "Grenada"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Guadeloupe", "ar": "غوادلوب", "de": "Guadeloupe"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Guam", "ar": "غوام", "de": "Guam"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Guatemala", "ar": "غواتيمالا", "de": "Guatemala"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Guernsey", "ar": "غيرنسي", "de": "Guernsey"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Guinea", "ar": "غينيا", "de": "Guinea"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Guinea-Bissau", "ar": "غينيا بيساو", "de": "Guinea-Bissau"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Guyana", "ar": "غيانا", "de": "Guyana"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Haiti", "ar": "هايتي", "de": "Haiti"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Heard Island and McDonald Islands", "ar": "جزيرة هيرد وجزر ماكدونالد", "de": "Heard-Insel und McDonald-Inseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Holy See (Vatican City State)", "ar": "الكرسي الرسولي (دولة مدينة الفاتيكان)", "de": "Heiliger Stuhl (Staat Vatikanstadt)"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Honduras", "ar": "هندوراس", "de": "Honduras"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Hong Kong", "ar": "هونج كونج", "de": "Hongkong"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Hungary", "ar": "هنغاريا", "de": "Ungarn"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Iceland", "ar": "أيسلندا", "de": "Island"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "India", "ar": "الهند", "de": "Indien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Indonesia", "ar": "اندونيسيا", "de": "Indonesien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Islamic Republic of Iran", "ar": "جمهورية إيران الإسلامية", "de": "Islamische Republik Iran"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Iraq", "ar": "العراق", "de": "Irak"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Ireland", "ar": "أيرلندا", "de": "Irland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Isle of Man", "ar": "جزيرة مان", "de": "Isle of Man"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Israel", "ar": "إسرائيل", "de": "Israel"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Italy", "ar": "ايتاليا", "de": "Italien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Jamaica", "ar": "جامايكا", "de": "Jamaika"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Japan", "ar": "اليابان", "de": "Japan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Jersey", "ar": "جيرسي", "de": "Jersey"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Jordan", "ar": "الأردن", "de": "Jordanien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Kazakhstan", "ar": "كازاخستان", "de": "Kasachstan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Kenya", "ar": "كينيا", "de": "Kenia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Kiribati", "ar": "كيريباتي", "de": "Kiribati"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Democratic People\'s Republic of Korea", "ar": "جمهورية كوريا الشمالية", "de": "Demokratische Volksrepublik Korea"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Republic of Korea", "ar": "جمهورية كوريا الجنوبية", "de": "Republik Korea"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Kuwait", "ar": "كازاخستان", "de": "Kuwait"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Kyrgyzstan", "ar": "قيرغيزستان", "de": "Kirgisistan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Lao People\'s Democratic Republic", "ar": "جمهورية لاو الديمقراطية الشعبية", "de": "Demokratische Volksrepublik Laos"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Latvia", "ar": "لاتفيا", "de": "Lettland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Lebanon", "ar": "لبنان", "de": "Libanon"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Lesotho", "ar": "ليسوتو", "de": "Lesotho"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Liberia", "ar": "ليبيريا", "de": "Liberia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Libya", "ar": "ليبيا", "de": "Libyen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Liechtenstein", "ar": "ليشتنشتاين", "de": "Liechtenstein"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Lithuania", "ar": "ليتوانيا", "de": "Litauen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Luxembourg", "ar": "لوكسمبورغ", "de": "Luxemburg"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Macao", "ar": "ماكاو", "de": "Macau"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "The Former Yugoslav Republic of Macedonia", "ar": "جمهورية مقدونيا اليوغوسلافية السابقة", "de": "Die ehemalige jugoslawische Republik Mazedonien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Madagascar", "ar": "مدغشقر", "de": "Madagaskar"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Malawi", "ar": "ملاوي", "de": "Malawi"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Malaysia", "ar": "ماليزيا", "de": "Malaysia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Maldives", "ar": "مالديف", "de": "Malediven"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Mali", "ar": "مالي", "de": "Mali"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Malta", "ar": "مالطا", "de": "Malta"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Marshall Islands", "ar": "جزر مارشال", "de": "Marshall-Inseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Martinique", "ar": "المارتينيك", "de": "Martinique"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Mauritania", "ar": "موريتانيا", "de": "Mauretanien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Mauritius", "ar": "موريشيوس", "de": "Mauretanien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Mayotte", "ar": "مايوت", "de": "Mayotte"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Mexico", "ar": "المكسيك", "de": "Mexiko"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Federated States of Micronesia", "ar": "ولايات ميكرونيزيا الموحدة", "de": "Föderierte Staaten von Mikronesien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Republic of Moldova", "ar": "جمهورية مولدوفا", "de": "Republik Moldau"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Monaco", "ar": "موناكو", "de": "Monaco"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Mongolia", "ar": "منغوليا", "de": "Mongolei"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Montenegro", "ar": "مونتينيغرو", "de": "Montenegro"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Montserrat", "ar": "مونتسيرات", "de": "Montserrat"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Morocco", "ar": "المغرب", "de": "Marokko"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Mozambique", "ar": "موزمبيق", "de": "Mosambik"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Myanmar", "ar": "ميانمار", "de": "Myanmar"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Namibia", "ar": "ناميبيا", "de": "Namibia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Nauru", "ar": "ناورو", "de": "Nauru"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Nepal", "ar": "نيبال", "de": "Nepal"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Netherlands", "ar": "ناميبيا", "de": "Niederlande"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "New Caledonia", "ar": "كاليدونيا الجديدة", "de": "Neukaledonien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "New Zealand", "ar": "نيوزيلندا", "de": "Neuseeland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Nicaragua", "ar": "نيكاراغوا", "de": "Nicaragua"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Niger", "ar": "النيجر", "de": "Niger"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Nigeria", "ar": "نيجيريا", "de": "Nigeria"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Niue", "ar": "نيوي", "de": "Niue"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Norfolk Island", "ar": "جزيرة نورفولك", "de": "Norfolkinsel"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Northern Mariana Islands", "ar": "جزر ماريانا الشمالية", "de": "Nördliche Marianen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Norway", "ar": "النرويج", "de": "Norwegen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Oman", "ar": "عمان", "de": "Oman"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Pakistan", "ar": "باكستان", "de": "Pakistan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Palau", "ar": "بالاو", "de": "Palau"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Palestine", "ar": "فلسطين", "de": "Palästina"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Panama", "ar": "بنما", "de": "Panama"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Papua New Guinea", "ar": "بابوا غينيا الجديدة", "de": "Papua-Neuguinea"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Paraguay", "ar": "باراغواي", "de": "Paraguay"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Peru", "ar": "بيرو", "de": "Peru"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Philippines", "ar": "الفلبين", "de": "Philippinen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Pitcairn", "ar": "بيتكيرن", "de": "Pitcairn"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Poland", "ar": "بولندا", "de": "Polen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Portugal", "ar": "البرتغال", "de": "Portugal"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Puerto Rico", "ar": "بورتوريكو", "de": "Puerto Rico"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Qatar", "ar": "قطر", "de": "Katar"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Réunion", "ar": "ريونيون", "de": "Réunion"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Romania", "ar": "رومانيا", "de": "Rumänien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Russian Federation", "ar": "الاتحاد الروسي", "de": "Russische Föderation"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Rwanda", "ar": "رواندا", "de": "Ruanda"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saint Barthélemy", "ar": "سانت بارتيليمي", "de": "St. Barthélemy"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saint Helena, Ascension and Tristan da Cunha", "ar": "سانت هيلانة وأسنسيون وتريستان دا كونها", "de": "St. Helena, Ascension und Tristan da Cunha"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saint Kitts and Nevis", "ar": "سانت كيتس ونيفيس", "de": "St. Kitts und Nevis"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saint Lucia", "ar": "سانت لوسيا", "de": "St. Lucia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saint Martin (French part)", "ar": "سانت مارتن (الجزء الفرنسي)", "de": "St. Martin (französischer Teil)"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saint Pierre and Miquelon", "ar": "سانت بيير وميكلون", "de": "St. Pierre und Miquelon"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saint Vincent and the Grenadines", "ar": "سانت فنسنت وجزر غرينادين", "de": "St. Vincent und die Grenadinen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Samoa", "ar": "ساموا", "de": "Samoa"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "San Marino", "ar": "سان مارينو", "de": "San Marino"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Sao Tome and Principe", "ar": "سان تومي وبرينسيبي", "de": "Sao Tome und Principe"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Saudi Arabia", "ar": "المملكة العربية السعودية", "de": "Saudi-Arabien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Senegal", "ar": "السنغال", "de": "Senegal"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Serbia", "ar": "صربيا", "de": "Serbien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Seychelles", "ar": "سيشيل", "de": "Seychellen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Sierra Leone", "ar": "سيراليون", "de": "Sierra Leone"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Singapore", "ar": "سنغافورة", "de": "Singapur"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Sint Maarten (Dutch part)", "ar": "سينت مارتن (الجزء الهولندي)", "de": "Sint Maarten (Niederländischer Teil)"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Slovakia", "ar": "سلوفاكيا", "de": "Slowakei"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Slovenia", "ar": "سلوفينيا", "de": "Slowenien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Solomon Islands", "ar": "جزر سليمان", "de": "Salomon-Inseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Somalia", "ar": "الصومال", "de": "Somalia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "South Africa", "ar": "جنوب أفريقيا", "de": "Südafrika"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "South Georgia and the South Sandwich Islands", "ar": "جورجيا الجنوبية وجزر ساندويتش الجنوبية", "de": "Südgeorgien und die Südlichen Sandwichinseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "South Sudan", "ar": "جنوب السودان", "de": "Südsudan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Spain", "ar": "اسبانيا", "de": "Spanien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Sri Lanka", "ar": "سريلانكا", "de": "Sri Lanka"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Sudan", "ar": "السودان", "de": "Sudan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Suriname", "ar": "سورينام", "de": "Surinam"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Svalbard and Jan Mayen", "ar": "سفالبارد وجان ماين", "de": "Svalbard und Jan Mayen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Swaziland", "ar": "سوازيلاند", "de": "Swasiland"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Sweden", "ar": "السويد", "de": "Schweden"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Switzerland", "ar": "سويسرا", "de": "Schweiz"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Syrian Arab Republic", "ar": "الجمهورية العربية السورية", "de": "Arabische Republik Syrien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Taiwan", "ar": "تايوان", "de": "Taiwan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Tajikistan", "ar": "طاجيكستان", "de": "Tadschikistan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Tanzania, United Republic of", "ar": "جمهورية تنزانيا المتحدة", "de": "Tansania, Vereinigte Republik"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Thailand", "ar": "تايلاند", "de": "Thailand"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Timor-Leste", "ar": "تيمور - ليشتي", "de": "Timor-Leste"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Togo", "ar": "توغو", "de": "Togo"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Tokelau", "ar": "توكيلاو", "de": "Tokelau"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Tonga", "ar": "تونغا", "de": "Tonga"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Trinidad and Tobago", "ar": "ترينيداد وتوباغو", "de": "Trinidad und Tobago"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Tunisia", "ar": "تونس", "de": "Tunesien"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Turkey", "ar": "تركيا", "de": "Türkei"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Turkmenistan", "ar": "تركمانستان", "de": "Turkmenistan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Turks and Caicos Islands", "ar": "جزر تركس وكايكوس", "de": "Turks- und Caicosinseln"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Tuvalu", "ar": "توفالو", "de": "Tuvalu"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Uganda", "ar": "أوغندا", "de": "Uganda"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Ukraine", "ar": "أوكرانيا", "de": "Ukraine"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "United Arab Emirates", "ar": "الإمارات العربية المتحدة", "de": "Vereinigte Arabische Emirate"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "United Kingdom", "ar": "المملكة المتحدة", "de": "Vereinigtes Königreich"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "United States", "ar": "الولايات المتحدة الأمريكية", "de": "Vereinigte Staaten"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "United States Minor Outlying Islands", "ar": "جزر الولايات المتحدة البعيدة الصغرى", "de": "Vereinigte Staaten Minor Outlying Islands"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Uruguay", "ar": "أوروغواي", "de": "Uruguay"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Uzbekistan", "ar": "أوزبكستان", "de": "Usbekistan"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Vanuatu", "ar": "فانواتو", "de": "Vanuatu"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Venezuela, Bolivarian Republic of", "ar": "جمهورية فنزويلا البوليفارية", "de": "Venezuela, Bolivarische Republik"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Viet Nam", "ar": "فيتنام", "de": "Vietnam"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Virgin Islands, British", "ar": "جزر فيرجن، البريطانية", "de": "Jungferninseln, Britische"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Virgin Islands, U.S.", "ar": "جزر فيرجن الأمريكية، الولايات المتحدة", "de": "Jungferninseln, U.S."}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Wallis and Futuna", "ar": "واليس وفوتونا", "de": "Wallis und Futuna"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Western Sahara", "ar": "الصحراء الغربية", "de": "Westsahara"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Yemen", "ar": "اليمن", "de": "Jemen"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Zambia", "ar": "زامبيا", "de": "Sambia"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '{"en": "Zimbabwe", "ar": "زيمبابوي", "de": "Simbabwe"}',
                'is_active' => '1',
                'lockup_type_id' => '4',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('lockups')->insertOrIgnore($data);
    }
}
