DROP TABLE IF EXISTS `blog_jf_post`;
CREATE TABLE IF NOT EXISTS `blog_jf_post`
(
    `id`        int(11)      NOT NULL AUTO_INCREMENT,
    `title`     varchar(100) NOT NULL,
    `content`   text         NOT NULL,
    `author`    varchar(100) NOT NULL,
    `createdAt` datetime     NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 48
  DEFAULT CHARSET = utf8;

--
-- Déchargement des données de la table `blog_jf_post`
--

INSERT INTO `blog_jf_post` (`id`, `title`, `content`, `author`, `createdAt`)
VALUES (1, 'Un premier extrait',
        'Ipsam vero urbem Byzantiorum fuisse refertissimam atque ornatissimam signis quis ignorat? Quae illi, exhausti sumptibus bellisque maximis, cum omnis Mithridaticos impetus totumque Pontum armatum affervescentem in Asiam atque erumpentem, ore repulsum et cervicibus interclusum suis sustinerent, tum, inquam, Byzantii et postea signa illa et reliqua urbis ornanemta sanctissime custodita tenuerunt. Regale pater est nominis criminum ductus struuntur Apollinaris incertum indicatum rector ductus est cuius congregati diversis usibus est multi eiusdem occulte aliique est ideoque usibus aliique rector congregati diversis civitatibus sunt struuntur atrocium multi congregati criminum incertum usibus urgebantur diversis.',
        'Jean Forteroche', '2019-03-15 08:10:24'),
       (2, 'Un deuxième extrait',
        'Sed maximum est in amicitia parem esse inferiori. Saepe enim excellentiae quaedam sunt, qualis erat Scipionis in nostro, ut ita dicam, grege. Numquam se ille Philo, numquam Rupilio, numquam Mummio anteposuit, numquam inferioris ordinis amicis, Q. vero Maximum fratrem, egregium virum omnino, sibi nequaquam parem, quod is anteibat aetate, tamquam superiorem colebat suosque omnes per se posse esse ampliores volebat.\r\nRegale pater est nominis criminum ductus struuntur Apollinaris incertum indicatum rector ductus est cuius congregati diversis usibus est multi eiusdem occulte aliique est ideoque usibus aliique rector congregati diversis civitatibus sunt struuntur atrocium multi congregati criminum incertum usibus urgebantur diversis.',
        'Jean Forteroche', '2019-03-16 13:27:38'),
       (39, 'un troisième article',
        'Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi. Et quia Mesopotamiae tractus omnes crebro inquietari sueti praetenturis et stationibus servabantur agrariis, laevorsum flexo itinere Osdroenae subsederat extimas partes, novum parumque aliquando temptatum commentum adgressus. quod si impetrasset, fulminis modo cuncta vastarat. erat autem quod cogitabat huius modi.',
        'Jean Forteroche', '2019-08-24 01:38:10'),
       (42, 'Un autre article',
        'Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis hodie sit.',
        'Jean Forteroche', '2019-08-30 23:10:36'),
       (44, 'Encore un article',
        'Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina suscipitur et regina et ubique patrum reverenda cum auctoritate canities populique Romani nomen circumspectum et verecundum.',
        'Jean Forteroche', '2019-08-30 23:27:34');