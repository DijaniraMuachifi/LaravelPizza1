<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('order')->insert([
        ['pizzaname' => 'Popey', 'amount' => 2, 'taken' => '2005-11-12 11:21:00', 'dispatched' => '2005-11-12 12:11:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 1, 'taken' => '2005-11-12 11:41:00', 'dispatched' => '2005-11-12 12:26:00'],
        ['pizzaname' => 'Barbecue chicken', 'amount' => 1, 'taken' => '2005-11-12 12:38:00', 'dispatched' => '2005-11-12 13:02:00'],
        ['pizzaname' => 'Röfi', 'amount' => 1, 'taken' => '2005-11-12 13:18:00', 'dispatched' => '2005-11-12 13:58:00'],
        ['pizzaname' => 'Tündi kedvence', 'amount' => 1, 'taken' => '2005-11-12 13:44:00', 'dispatched' => '2005-11-12 16:53:00'],
        ['pizzaname' => 'Hercegnő', 'amount' => 2, 'taken' => '2005-11-12 14:10:00', 'dispatched' => '2005-11-12 14:57:00'],
        ['pizzaname' => 'Mixi', 'amount' => 1, 'taken' => '2005-11-12 14:20:00', 'dispatched' => '2005-11-12 16:25:00'],
        ['pizzaname' => 'Ráki', 'amount' => 3, 'taken' => '2005-11-12 14:51:00', 'dispatched' => '2005-11-12 17:06:00'],
        ['pizzaname' => 'Szőke kapitány', 'amount' => 1, 'taken' => '2005-11-12 15:13:00', 'dispatched' => '2005-11-12 17:12:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 1, 'taken' => '2005-11-12 15:42:00', 'dispatched' => '2005-11-12 16:48:00'],
        ['pizzaname' => 'Sonkás', 'amount' => 1, 'taken' => '2005-11-12 16:31:00', 'dispatched' => '2005-11-12 16:53:00'],
        ['pizzaname' => 'Excellent', 'amount' => 1, 'taken' => '2005-11-12 17:01:00', 'dispatched' => '2005-11-12 19:41:00'],
        ['pizzaname' => 'Máj Fair Lady', 'amount' => 2, 'taken' => '2005-11-12 17:58:00', 'dispatched' => '2005-11-12 20:39:00'],
        ['pizzaname' => 'Frankfurti', 'amount' => 1, 'taken' => '2005-11-12 18:48:00', 'dispatched' => '2005-11-12 21:45:00'],
        ['pizzaname' => 'Pástétomos', 'amount' => 1, 'taken' => '2005-11-12 19:15:00', 'dispatched' => '2005-11-12 21:04:00'],
        ['pizzaname' => 'Máj Fair Lady', 'amount' => 1, 'taken' => '2005-11-12 19:45:00', 'dispatched' => '2005-11-12 21:46:00'],
        ['pizzaname' => 'Tüzes halál', 'amount' => 2, 'taken' => '2005-11-12 19:54:00', 'dispatched' => '2005-11-12 22:48:00'],
        ['pizzaname' => 'Hellas', 'amount' => 1, 'taken' => '2005-11-12 20:25:00', 'dispatched' => '2005-11-12 23:15:00'],
        ['pizzaname' => 'Lecsó', 'amount' => 1, 'taken' => '2005-11-12 21:21:00', 'dispatched' => '2005-11-13 00:31:00'],
        ['pizzaname' => 'Mamma fia', 'amount' => 1, 'taken' => '2005-11-12 21:41:00', 'dispatched' => '2005-11-13 00:06:00'],
        ['pizzaname' => 'Country', 'amount' => 3, 'taken' => '2005-11-12 22:18:00', 'dispatched' => '2005-11-13 00:01:00'],
        ['pizzaname' => 'Tenger gyümölcsei', 'amount' => 1, 'taken' => '2005-11-12 22:36:00', 'dispatched' => '2005-11-13 00:38:00'],
        ['pizzaname' => 'Kívánság', 'amount' => 1, 'taken' => '2005-11-12 23:02:00', 'dispatched' => '2005-11-13 00:53:00'],
        ['pizzaname' => 'Hamm', 'amount' => 3, 'taken' => '2005-11-12 23:47:00', 'dispatched' => '2005-11-13 00:23:00'],
        ['pizzaname' => 'Magvas', 'amount' => 1, 'taken' => '2005-11-13 00:44:00', 'dispatched' => '2005-11-13 02:14:00'],
        ['pizzaname' => 'Szardíniás', 'amount' => 1, 'taken' => '2005-11-13 00:56:00', 'dispatched' => '2005-11-13 02:29:00'],
        ['pizzaname' => 'Csupa sajt', 'amount' => 2, 'taken' => '2005-11-13 01:22:00', 'dispatched' => '2005-11-13 04:33:00'],
        ['pizzaname' => 'Sajtos', 'amount' => 1, 'taken' => '2005-11-13 01:31:00', 'dispatched' => '2005-11-13 04:24:00'],
        ['pizzaname' => 'Szerzetes', 'amount' => 1, 'taken' => '2005-11-13 01:35:00', 'dispatched' => '2005-11-13 04:01:00'],
        ['pizzaname' => 'HamAndEggs', 'amount' => 1, 'taken' => '2005-11-13 01:38:00', 'dispatched' => '2005-11-13 02:09:00'],
        ['pizzaname' => 'Szalámis', 'amount' => 1, 'taken' => '2005-11-13 01:39:00', 'dispatched' => '2005-11-13 03:25:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 2, 'taken' => '2005-11-13 02:03:00', 'dispatched' => '2005-11-13 02:50:00'],
        ['pizzaname' => 'Jázmin álma', 'amount' => 1, 'taken' => '2005-11-13 02:29:00', 'dispatched' => '2005-11-13 04:27:00'],
        ['pizzaname' => 'Magvas', 'amount' => 1, 'taken' => '2005-11-13 02:37:00', 'dispatched' => '2005-11-13 03:38:00'],
        ['pizzaname' => 'Sajtos', 'amount' => 1, 'taken' => '2005-11-13 03:23:00', 'dispatched' => '2005-11-13 04:47:00'],
        ['pizzaname' => 'Szardíniás', 'amount' => 1, 'taken' => '2005-11-13 04:19:00', 'dispatched' => '2005-11-13 05:17:00'],
        ['pizzaname' => 'Sajtos', 'amount' => 1, 'taken' => '2005-11-13 04:32:00', 'dispatched' => '2005-11-13 06:42:00'],
        ['pizzaname' => 'Gino', 'amount' => 2, 'taken' => '2005-11-13 05:28:00', 'dispatched' => '2005-11-13 06:30:00'],
        ['pizzaname' => 'Ínyenc', 'amount' => 1, 'taken' => '2005-11-13 06:16:00', 'dispatched' => '2005-11-13 09:14:00'],
        ['pizzaname' => 'Juhtúrós', 'amount' => 1, 'taken' => '2005-11-13 06:48:00', 'dispatched' => '2005-11-13 07:39:00'],
        ['pizzaname' => 'Caribi', 'amount' => 1, 'taken' => '2005-11-13 07:39:00', 'dispatched' => '2005-11-13 08:05:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 1, 'taken' => '2005-11-13 08:25:00', 'dispatched' => '2005-11-13 09:25:00'],
        ['pizzaname' => 'Babos', 'amount' => 1, 'taken' => '2005-11-13 09:03:00', 'dispatched' => '2005-11-13 09:34:00'],
        ['pizzaname' => 'Babos', 'amount' => 1, 'taken' => '2005-11-13 09:27:00', 'dispatched' => '2005-11-13 10:50:00'],
        ['pizzaname' => 'Son-go-ku', 'amount' => 1, 'taken' => '2005-11-13 09:56:00', 'dispatched' => '2005-11-13 11:57:00'],
        ['pizzaname' => 'HamAndEggs', 'amount' => 1, 'taken' => '2005-11-13 10:17:00', 'dispatched' => '2005-11-13 11:14:00'],
        ['pizzaname' => 'Szalámis', 'amount' => 2, 'taken' => '2005-11-13 11:03:00', 'dispatched' => '2005-11-13 13:11:00'],
        ['pizzaname' => 'Gyros pizza', 'amount' => 1, 'taken' => '2005-11-13 11:12:00', 'dispatched' => '2005-11-13 12:03:00'],
        ['pizzaname' => 'Máj Fair Lady', 'amount' => 3, 'taken' => '2005-11-13 11:46:00', 'dispatched' => '2005-11-13 14:00:00'],
        ['pizzaname' => 'Pipis', 'amount' => 1, 'taken' => '2005-11-13 12:27:00', 'dispatched' => '2005-11-13 14:40:00'],
        ['pizzaname' => 'Quattro', 'amount' => 2, 'taken' => '2005-11-13 12:54:00', 'dispatched' => '2005-11-13 13:45:00'],
        ['pizzaname' => 'Maffiózó', 'amount' => 2, 'taken' => '2005-11-13 13:18:00', 'dispatched' => '2005-11-13 15:54:00'],
        ['pizzaname' => 'Mamma fia', 'amount' => 1, 'taken' => '2005-11-13 13:25:00', 'dispatched' => '2005-11-13 16:36:00'],
        ['pizzaname' => 'Son-go-ku', 'amount' => 1, 'taken' => '2005-11-13 14:15:00', 'dispatched' => '2005-11-13 16:08:00'],
        ['pizzaname' => 'Kívánság', 'amount' => 1, 'taken' => '2005-11-13 15:05:00', 'dispatched' => '2005-11-13 15:34:00'],
        ['pizzaname' => 'Góré', 'amount' => 1, 'taken' => '2005-11-13 15:44:00', 'dispatched' => '2005-11-13 17:09:00'],
        ['pizzaname' => 'Csabesz', 'amount' => 1, 'taken' => '2005-11-13 16:16:00', 'dispatched' => '2005-11-13 17:18:00'],
        ['pizzaname' => 'Nordic', 'amount' => 1, 'taken' => '2005-11-13 16:58:00', 'dispatched' => '2005-11-13 19:00:00'],
        ['pizzaname' => 'Magvas', 'amount' => 1, 'taken' => '2005-11-13 17:27:00', 'dispatched' => '2005-11-13 19:45:00'],
        ['pizzaname' => 'Barbecue chicken', 'amount' => 1, 'taken' => '2005-11-13 17:52:00', 'dispatched' => '2005-11-13 19:06:00'],
        ['pizzaname' => 'Sajtos', 'amount' => 1, 'taken' => '2005-11-13 18:39:00', 'dispatched' => '2005-11-13 20:13:00'],
        ['pizzaname' => 'Quattro', 'amount' => 1, 'taken' => '2005-11-13 19:33:00', 'dispatched' => '2005-11-13 21:32:00'],
        ['pizzaname' => 'Popey', 'amount' => 3, 'taken' => '2005-11-13 20:29:00', 'dispatched' => '2005-11-13 22:12:00'],
        ['pizzaname' => 'Mexikói', 'amount' => 2, 'taken' => '2005-11-13 21:15:00', 'dispatched' => '2005-11-13 23:03:00'],
        ['pizzaname' => 'Babos', 'amount' => 1, 'taken' => '2005-11-13 22:09:00', 'dispatched' => '2005-11-14 00:32:00'],
        ['pizzaname' => 'Kétszínű', 'amount' => 1, 'taken' => '2005-11-13 22:52:00', 'dispatched' => '2005-11-14 00:30:00'],
        ['pizzaname' => 'Kétszínű', 'amount' => 1, 'taken' => '2005-11-13 22:55:00', 'dispatched' => '2005-11-14 00:45:00'],
        ['pizzaname' => 'Tonhalas', 'amount' => 2, 'taken' => '2005-11-13 23:38:00', 'dispatched' => '2005-11-14 01:02:00'],
        ['pizzaname' => 'Pacalos', 'amount' => 1, 'taken' => '2005-11-14 00:02:00', 'dispatched' => '2005-11-14 02:00:00'],
        ['pizzaname' => 'Szőke kapitány', 'amount' => 1, 'taken' => '2005-11-14 00:52:00', 'dispatched' => '2005-11-14 03:02:00'],
        ['pizzaname' => 'Erős János', 'amount' => 1, 'taken' => '2005-11-14 01:14:00', 'dispatched' => '2005-11-14 02:34:00'],
        ['pizzaname' => 'Magyaros', 'amount' => 1, 'taken' => '2005-11-14 01:43:00', 'dispatched' => '2005-11-14 04:21:00'],
        ['pizzaname' => 'Lecsó', 'amount' => 2, 'taken' => '2005-11-14 01:48:00', 'dispatched' => '2005-11-14 04:58:00'],
        ['pizzaname' => 'Csabesz', 'amount' => 1, 'taken' => '2005-11-14 02:25:00', 'dispatched' => '2005-11-14 02:54:00'],
        ['pizzaname' => 'Mixi', 'amount' => 1, 'taken' => '2005-11-14 02:45:00', 'dispatched' => '2005-11-14 04:15:00'],
        ['pizzaname' => 'Mexikói', 'amount' => 1, 'taken' => '2005-11-14 03:27:00', 'dispatched' => '2005-11-14 06:34:00'],
        ['pizzaname' => 'Caribi', 'amount' => 1, 'taken' => '2005-11-14 03:29:00', 'dispatched' => '2005-11-14 04:29:00'],
        ['pizzaname' => 'Ráki', 'amount' => 3, 'taken' => '2005-11-14 04:21:00', 'dispatched' => '2005-11-14 04:42:00'],
        ['pizzaname' => 'Mamma fia', 'amount' => 3, 'taken' => '2005-11-14 05:09:00', 'dispatched' => '2005-11-14 07:49:00'],
        ['pizzaname' => 'Nordic', 'amount' => 1, 'taken' => '2005-11-14 05:56:00', 'dispatched' => '2005-11-14 07:39:00'],
        ['pizzaname' => 'Szerzetes', 'amount' => 1, 'taken' => '2005-11-14 06:34:00', 'dispatched' => '2005-11-14 07:23:00'],
        ['pizzaname' => 'Hawaii', 'amount' => 1, 'taken' => '2005-11-14 06:51:00', 'dispatched' => '2005-11-14 08:37:00'],
        ['pizzaname' => 'Szalámis', 'amount' => 1, 'taken' => '2005-11-14 07:17:00', 'dispatched' => '2005-11-14 09:00:00'],
        ['pizzaname' => 'Csabesz', 'amount' => 1, 'taken' => '2005-11-14 07:57:00', 'dispatched' => '2005-11-14 09:56:00'],
        ['pizzaname' => 'Kolbászos', 'amount' => 1, 'taken' => '2005-11-14 08:28:00', 'dispatched' => '2005-11-14 08:56:00'],
        ['pizzaname' => 'Magvas', 'amount' => 1, 'taken' => '2005-11-14 09:21:00', 'dispatched' => '2005-11-14 11:15:00'],
        ['pizzaname' => 'Tenger gyümölcsei', 'amount' => 1, 'taken' => '2005-11-14 09:54:00', 'dispatched' => '2005-11-14 10:45:00'],
        ['pizzaname' => 'Lagúna', 'amount' => 1, 'taken' => '2005-11-14 10:09:00', 'dispatched' => '2005-11-14 12:53:00'],
        ['pizzaname' => 'Kívánság', 'amount' => 1, 'taken' => '2005-11-14 10:56:00', 'dispatched' => '2005-11-14 14:02:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 1, 'taken' => '2005-11-14 11:30:00', 'dispatched' => '2005-11-14 11:58:00'],
        ['pizzaname' => 'So-ku', 'amount' => 1, 'taken' => '2005-11-14 12:04:00', 'dispatched' => '2005-11-14 14:02:00'],
        ['pizzaname' => 'Country', 'amount' => 2, 'taken' => '2005-11-14 12:41:00', 'dispatched' => '2005-11-14 15:41:00'],
        ['pizzaname' => 'Mamma fia', 'amount' => 1, 'taken' => '2005-11-14 12:47:00', 'dispatched' => '2005-11-14 15:38:00'],
        ['pizzaname' => 'Törperős', 'amount' => 1, 'taken' => '2005-11-14 13:22:00', 'dispatched' => '2005-11-14 14:11:00'],
        ['pizzaname' => 'Hawaii', 'amount' => 1, 'taken' => '2005-11-14 13:49:00', 'dispatched' => '2005-11-14 16:41:00'],
        ['pizzaname' => 'Zöldike', 'amount' => 1, 'taken' => '2005-11-14 14:41:00', 'dispatched' => '2005-11-14 16:48:00'],
        ['pizzaname' => 'Szőke kapitány', 'amount' => 1, 'taken' => '2005-11-14 15:33:00', 'dispatched' => '2005-11-14 16:40:00'],
        ['pizzaname' => 'Pacalos', 'amount' => 1, 'taken' => '2005-11-14 16:03:00', 'dispatched' => '2005-11-14 18:22:00'],
        ['pizzaname' => 'Máj Fair Lady', 'amount' => 1, 'taken' => '2005-11-14 16:21:00', 'dispatched' => '2005-11-14 19:17:00'],
        ['pizzaname' => 'Tonhalas', 'amount' => 1, 'taken' => '2005-11-14 16:49:00', 'dispatched' => '2005-11-14 19:38:00'],
        ['pizzaname' => 'Tenger gyümölcsei', 'amount' => 3, 'taken' => '2005-11-14 17:23:00', 'dispatched' => '2005-11-14 18:51:00'],
        ['pizzaname' => 'Country', 'amount' => 2, 'taken' => '2005-11-14 17:30:00', 'dispatched' => '2005-11-14 19:53:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 3, 'taken' => '2005-11-14 17:43:00', 'dispatched' => '2005-11-14 20:31:00'],
        ['pizzaname' => 'Nordic', 'amount' => 1, 'taken' => '2005-11-14 17:46:00', 'dispatched' => '2005-11-14 19:25:00'],
        ['pizzaname' => 'So-ku', 'amount' => 1, 'taken' => '2005-11-14 18:33:00', 'dispatched' => '2005-11-14 19:43:00'],
        ['pizzaname' => 'Góré', 'amount' => 1, 'taken' => '2005-11-14 19:05:00', 'dispatched' => '2005-11-14 20:05:00'],
        ['pizzaname' => 'Country', 'amount' => 1, 'taken' => '2005-11-14 19:51:00', 'dispatched' => '2005-11-14 22:36:00'],
        ['pizzaname' => 'Tündi kedvence', 'amount' => 1, 'taken' => '2005-11-14 20:20:00', 'dispatched' => '2005-11-14 23:12:00'],
        ['pizzaname' => 'Lagúna', 'amount' => 1, 'taken' => '2005-11-14 21:04:00', 'dispatched' => '2005-11-14 23:13:00'],
        ['pizzaname' => 'So-ku', 'amount' => 1, 'taken' => '2005-11-14 21:08:00', 'dispatched' => '2005-11-14 22:43:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 3, 'taken' => '2005-11-14 21:51:00', 'dispatched' => '2005-11-14 23:33:00'],
        ['pizzaname' => 'Lagúna', 'amount' => 2, 'taken' => '2005-11-14 22:43:00', 'dispatched' => '2005-11-15 00:13:00'],
        ['pizzaname' => 'Ínyenc', 'amount' => 1, 'taken' => '2005-11-14 22:57:00', 'dispatched' => '2005-11-15 00:33:00'],
        ['pizzaname' => 'Szalámis', 'amount' => 1, 'taken' => '2005-11-14 23:05:00', 'dispatched' => '2005-11-15 01:42:00'],
        ['pizzaname' => 'Excellent', 'amount' => 2, 'taken' => '2005-11-14 23:58:00', 'dispatched' => '2005-11-15 01:49:00'],
        ['pizzaname' => 'Tonhalas', 'amount' => 1, 'taken' => '2005-11-15 00:13:00', 'dispatched' => '2005-11-15 01:35:00'],
        ['pizzaname' => 'Röfi', 'amount' => 1, 'taken' => '2005-11-15 00:54:00', 'dispatched' => '2005-11-15 03:06:00'],
        ['pizzaname' => 'Popey', 'amount' => 1, 'taken' => '2005-11-15 01:17:00', 'dispatched' => '2005-11-15 03:40:00'],
        ['pizzaname' => 'Juhtúrós', 'amount' => 1, 'taken' => '2005-11-15 01:53:00', 'dispatched' => '2005-11-15 03:00:00'],
        ['pizzaname' => 'Nikó', 'amount' => 2, 'taken' => '2005-11-15 01:59:00', 'dispatched' => '2005-11-15 04:21:00'],
        ['pizzaname' => 'Szardíniás', 'amount' => 1, 'taken' => '2005-11-15 02:06:00', 'dispatched' => '2005-11-15 04:01:00'],
        ['pizzaname' => 'Country', 'amount' => 3, 'taken' => '2005-11-15 02:09:00', 'dispatched' => '2005-11-15 03:07:00'],
        ['pizzaname' => 'Zöldike', 'amount' => 1, 'taken' => '2005-11-15 02:14:00', 'dispatched' => '2005-11-15 04:44:00'],
        ['pizzaname' => 'Erős János', 'amount' => 1, 'taken' => '2005-11-15 03:09:00', 'dispatched' => '2005-11-15 04:56:00'],
        ['pizzaname' => 'Jázmin álma', 'amount' => 1, 'taken' => '2005-11-15 03:23:00', 'dispatched' => '2005-11-15 04:24:00'],
        ['pizzaname' => 'Pásztor', 'amount' => 1, 'taken' => '2005-11-15 03:44:00', 'dispatched' => '2005-11-15 06:21:00'],
        ['pizzaname' => 'Ráki', 'amount' => 3, 'taken' => '2005-11-15 04:03:00', 'dispatched' => '2005-11-15 07:00:00'],
        ['pizzaname' => 'Zöldike', 'amount' => 3, 'taken' => '2005-11-15 04:04:00', 'dispatched' => '2005-11-15 05:00:00'],
        ['pizzaname' => 'Juhtúrós', 'amount' => 1, 'taken' => '2005-11-15 04:17:00', 'dispatched' => '2005-11-15 04:59:00'],
        ['pizzaname' => 'Kiadós', 'amount' => 1, 'taken' => '2005-11-15 04:18:00', 'dispatched' => '2005-11-15 06:35:00'],
        ['pizzaname' => 'Nyuszó-Muszó', 'amount' => 1, 'taken' => '2005-11-15 04:29:00', 'dispatched' => '2005-11-15 07:00:00'],
        ['pizzaname' => 'Magyaros', 'amount' => 3, 'taken' => '2005-11-15 05:24:00', 'dispatched' => '2005-11-15 06:35:00'],
        ['pizzaname' => 'Törperős', 'amount' => 1, 'taken' => '2005-11-15 06:13:00', 'dispatched' => '2005-11-15 06:47:00'],
        ['pizzaname' => 'Csupa sajt', 'amount' => 1, 'taken' => '2005-11-15 07:05:00', 'dispatched' => '2005-11-15 08:19:00'],
        ['pizzaname' => 'Pásztor', 'amount' => 3, 'taken' => '2005-11-15 07:19:00', 'dispatched' => '2005-11-15 09:46:00'],
        ['pizzaname' => 'Babos', 'amount' => 1, 'taken' => '2005-11-15 07:28:00', 'dispatched' => '2005-11-15 09:21:00'],
        ['pizzaname' => 'Kagylós', 'amount' => 1, 'taken' => '2005-11-15 07:58:00', 'dispatched' => '2005-11-15 10:55:00'],
        ['pizzaname' => 'Mixi', 'amount' => 1, 'taken' => '2005-11-15 08:29:00', 'dispatched' => '2005-11-15 09:09:00'],
        ['pizzaname' => 'Áfonyás', 'amount' => 1, 'taken' => '2005-11-15 09:02:00', 'dispatched' => '2005-11-15 09:34:00'],
        ['pizzaname' => 'Mexikói', 'amount' => 3, 'taken' => '2005-11-15 09:49:00', 'dispatched' => '2005-11-15 10:54:00'],
        ['pizzaname' => 'Francia', 'amount' => 1, 'taken' => '2005-11-15 10:36:00', 'dispatched' => '2005-11-15 12:11:00'],
        ['pizzaname' => 'Tonhalas', 'amount' => 3, 'taken' => '2005-11-15 10:58:00', 'dispatched' => '2005-11-15 13:53:00'],
        ['pizzaname' => 'Kívánság', 'amount' => 1, 'taken' => '2005-11-15 11:28:00', 'dispatched' => '2005-11-15 13:07:00'],
        ['pizzaname' => 'Hercegnő', 'amount' => 1, 'taken' => '2005-11-15 12:04:00', 'dispatched' => '2005-11-15 14:35:00'],
        ['pizzaname' => 'Maffiózó', 'amount' => 2, 'taken' => '2005-11-15 12:29:00', 'dispatched' => '2005-11-15 14:28:00'],
        ['pizzaname' => 'Frankfurti', 'amount' => 1, 'taken' => '2005-11-15 13:10:00', 'dispatched' => '2005-11-15 13:39:00'],
        ['pizzaname' => 'Ínyenc', 'amount' => 3, 'taken' => '2005-11-15 13:58:00', 'dispatched' => '2005-11-15 15:43:00'],
        ['pizzaname' => 'Tenger gyümölcsei', 'amount' => 1, 'taken' => '2005-11-15 14:21:00', 'dispatched' => '2005-11-15 16:11:00'],
        ['pizzaname' => 'Hamm', 'amount' => 1, 'taken' => '2005-11-15 15:12:00', 'dispatched' => '2005-11-15 15:36:00'],
        ['pizzaname' => 'Máj Fair Lady', 'amount' => 1, 'taken' => '2005-11-15 16:00:00', 'dispatched' => '2005-11-15 18:52:00'],
        ['pizzaname' => 'Spencer', 'amount' => 3, 'taken' => '2005-11-15 16:46:00', 'dispatched' => '2005-11-15 18:13:00'],
        ['pizzaname' => 'Pásztor', 'amount' => 1, 'taken' => '2005-11-15 17:35:00', 'dispatched' => '2005-11-15 18:45:00'],
        ['pizzaname' => 'Sajtos', 'amount' => 3, 'taken' => '2005-11-15 18:22:00', 'dispatched' => '2005-11-15 19:12:00'],
        ['pizzaname' => 'Ilike', 'amount' => 1, 'taken' => '2005-11-15 18:31:00', 'dispatched' => '2005-11-15 20:54:00'],
        ['pizzaname' => 'Erős János', 'amount' => 1, 'taken' => '2005-11-15 18:44:00', 'dispatched' => '2005-11-15 19:31:00'],
        ['pizzaname' => 'Pipis', 'amount' => 1, 'taken' => '2005-11-15 19:36:00', 'dispatched' => '2005-11-15 22:43:00'],
        ['pizzaname' => 'Hamm', 'amount' => 1, 'taken' => '2005-11-15 19:45:00', 'dispatched' => '2005-11-15 22:43:00'],
        ['pizzaname' => 'Gyros pizza', 'amount' => 1, 'taken' => '2005-11-15 19:52:00', 'dispatched' => '2005-11-15 22:57:00'],
        ['pizzaname' => 'Görög', 'amount' => 1, 'taken' => '2005-11-15 20:40:00', 'dispatched' => '2005-11-15 21:33:00'],
        ['pizzaname' => 'Magvas', 'amount' => 1, 'taken' => '2005-11-15 21:38:00', 'dispatched' => '2005-11-15 22:06:00'],
        ['pizzaname' => 'Pacalos', 'amount' => 2, 'taken' => '2005-11-15 22:03:00', 'dispatched' => '2005-11-15 23:06:00'],
        ['pizzaname' => 'Jázmin álma', 'amount' => 1, 'taken' => '2005-11-15 22:36:00', 'dispatched' => '2005-11-15 23:15:00'],
        ['pizzaname' => 'Erdő kapitánya', 'amount' => 1, 'taken' => '2005-11-15 23:27:00', 'dispatched' => '2005-11-16 02:26:00'],
        ['pizzaname' => 'Hawaii', 'amount' => 1, 'taken' => '2005-11-16 00:06:00', 'dispatched' => '2005-11-16 01:40:00'],
        ['pizzaname' => 'Erős János', 'amount' => 1, 'taken' => '2005-11-16 00:12:00', 'dispatched' => '2005-11-16 01:50:00'],
        ['pizzaname' => 'Excellent', 'amount' => 3, 'taken' => '2005-11-16 00:45:00', 'dispatched' => '2005-11-16 02:44:00'],
        ['pizzaname' => 'Tonhalas', 'amount' => 1, 'taken' => '2005-11-16 01:26:00', 'dispatched' => '2005-11-16 02:28:00'],
        ['pizzaname' => 'Görög', 'amount' => 1, 'taken' => '2005-11-16 01:30:00', 'dispatched' => '2005-11-16 04:36:00'],
        ['pizzaname' => 'Röfi', 'amount' => 1, 'taken' => '2005-11-16 01:57:00', 'dispatched' => '2005-11-16 04:33:00'],
        ['pizzaname' => 'Tenger gyümölcsei', 'amount' => 3, 'taken' => '2005-11-16 02:22:00', 'dispatched' => '2005-11-16 05:03:00'],
       
    ]);
    }
}
