<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Book;

class LoadBookData extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface {

    private $container;
    
    public function load(ObjectManager $manager) {
        
        $slugger = $this->container->get("app.slugger");

        $harry_potter_coupe_de_feu = new Book();
        $harry_potter_coupe_de_feu->setTitle("Harry Potter et la coupe de feu");
        $harry_potter_coupe_de_feu->setReference("JKR01546");
        $harry_potter_coupe_de_feu->setSlug($slugger->slugify($harry_potter_coupe_de_feu->getReference() . '-' . $harry_potter_coupe_de_feu->getTitle()));
        $harry_potter_coupe_de_feu->setImage("harry_potter_et_la_coupe_de_feu.jpg");
        $harry_potter_coupe_de_feu->setSynopsis("La quatrième année à l'école de Poudlard est marquée par le \"Tournoi des trois sorciers\". Les participants sont choisis par la fameuse \"coupe de feu\" qui est à l'origine d'un scandale. Elle sélectionne Harry Potter alors qu'il n'a pas l'âge légal requis ! Accusé de tricherie et mis à mal par une série d'épreuves physiques de plus en plus difficiles, ce dernier sera enfin confronté à Celui dont on ne doit pas prononcer le nom, Lord V.");
        $harry_potter_coupe_de_feu->setAuthor($this->getReference("author-rowling"));
        $harry_potter_coupe_de_feu->addCategory($this->getReference("cat-roman"));
        $harry_potter_coupe_de_feu->addCategory($this->getReference("cat-sf"));
        $manager->persist($harry_potter_coupe_de_feu);
        $this->addReference("book-JKR01546", $harry_potter_coupe_de_feu);

        $harry_potter_chambre_des_secret = new Book();
        $harry_potter_chambre_des_secret->setTitle("Harry Potter et la chambre des secrets");
        $harry_potter_chambre_des_secret->setReference("JKR01587");
        $harry_potter_chambre_des_secret->setSlug($slugger->slugify($harry_potter_chambre_des_secret->getReference() . '-' . $harry_potter_chambre_des_secret->getTitle()));
        $harry_potter_chambre_des_secret->setImage("harry_potter_et_la_chambre_des_secrets.jpg");
        $harry_potter_chambre_des_secret->setSynopsis("Alors que l'oncle Vernon, la tante Pétunia et son cousin Dudley reçoivent d'importants invités à dîner, Harry Potter est contraint de passer la soirée dans sa chambre. Dobby, un elfe, fait alors son apparition. Il lui annonce que de terribles dangers menacent l'école de Poudlard et qu'il ne doit pas y retourner en septembre. Harry refuse de le croire. Mais sitôt la rentrée des classes effectuée, ce dernier entend une voix malveillante. Celle-ci lui dit que la redoutable et légendaire Chambre des secrets est à nouveau ouverte, permettant ainsi à l'héritier de Serpentard de semer le chaos à Poudlard. Les victimes, retrouvées pétrifiées par une force mystérieuse, se succèdent dans les couloirs de l'école, sans que les professeurs - pas même le populaire Gilderoy Lockhart - ne parviennent à endiguer la menace. Aidé de Ron et Hermione, Harry doit agir au plus vite pour sauver Poudlard.");
        $harry_potter_chambre_des_secret->setAuthor($this->getReference("author-rowling"));
        $harry_potter_chambre_des_secret->addCategory($this->getReference("cat-roman"));
        $harry_potter_chambre_des_secret->addCategory($this->getReference("cat-sf"));
        $manager->persist($harry_potter_chambre_des_secret);
        $this->addReference("book-JKR01587", $harry_potter_chambre_des_secret);

/*        $harry_potter_chambre_des_secret_2 = new Book();
        $harry_potter_chambre_des_secret_2->setTitle("Harry Potter et la chambre des secrets");
        $harry_potter_chambre_des_secret_2->setReference("JKR01645");
        $harry_potter_chambre_des_secret_2->setSlug($slugger->slugify($harry_potter_chambre_des_secret_2->getReference() . '-' . $harry_potter_chambre_des_secret_2->getTitle()));
        $harry_potter_chambre_des_secret_2->setImage("harry_potter_et_la_chambre_des_secrets.jpg");
        $harry_potter_chambre_des_secret_2->setSynopsis("Alors que l'oncle Vernon, la tante Pétunia et son cousin Dudley reçoivent d'importants invités à dîner, Harry Potter est contraint de passer la soirée dans sa chambre. Dobby, un elfe, fait alors son apparition. Il lui annonce que de terribles dangers menacent l'école de Poudlard et qu'il ne doit pas y retourner en septembre. Harry refuse de le croire. Mais sitôt la rentrée des classes effectuée, ce dernier entend une voix malveillante. Celle-ci lui dit que la redoutable et légendaire Chambre des secrets est à nouveau ouverte, permettant ainsi à l'héritier de Serpentard de semer le chaos à Poudlard. Les victimes, retrouvées pétrifiées par une force mystérieuse, se succèdent dans les couloirs de l'école, sans que les professeurs - pas même le populaire Gilderoy Lockhart - ne parviennent à endiguer la menace. Aidé de Ron et Hermione, Harry doit agir au plus vite pour sauver Poudlard.");
        $harry_potter_chambre_des_secret_2->setAuthor($this->getReference("author-rowling"));
        $harry_potter_chambre_des_secret_2->addCategory($this->getReference("cat-roman"));
        $harry_potter_chambre_des_secret_2->addCategory($this->getReference("cat-sf"));
        $manager->persist($harry_potter_chambre_des_secret_2);
        $this->addReference("book-JKR01645", $harry_potter_chambre_des_secret_2);*/

        $harry_potter_et_les_reliques_de_la_mort = new Book();
        $harry_potter_et_les_reliques_de_la_mort->setTitle("Harry Potter et les reliques de la mort");
        $harry_potter_et_les_reliques_de_la_mort->setReference("JKR01846");
        $harry_potter_et_les_reliques_de_la_mort->setSlug($slugger->slugify($harry_potter_et_les_reliques_de_la_mort->getReference() . '-' . $harry_potter_et_les_reliques_de_la_mort->getTitle()));
        $harry_potter_et_les_reliques_de_la_mort->setImage("harry_potter_et_les_reliques_de_la_mort.jpg");
        $harry_potter_et_les_reliques_de_la_mort->setSynopsis("Cette année, Harry a 17 ans et ne retourne pas à l'école de Poudlard après la mort de Dumbledore. Avec Ron et Hermione il se consacre à la dernière mission confiée par Dumbledore. Le Seigneur des Ténèbres règne en maître et traque les fidèles amis qui sont réduit à la clandestinité. D'épreuves en révélations, le courage, les choix et les sacrifices de Harry seront déterminants dans la lutte contre les forces du Mal.");
        $harry_potter_et_les_reliques_de_la_mort->setAuthor($this->getReference("author-rowling"));
        $harry_potter_et_les_reliques_de_la_mort->addCategory($this->getReference("cat-roman"));
        $harry_potter_et_les_reliques_de_la_mort->addCategory($this->getReference("cat-sf"));
        $manager->persist($harry_potter_et_les_reliques_de_la_mort);
        $this->addReference("book-JKR01846", $harry_potter_et_les_reliques_de_la_mort);

        $asterix_cleopatre = new Book();
        $asterix_cleopatre->setTitle("Astérix et Cléopâtre");
        $asterix_cleopatre->setReference("RG02454");
        $asterix_cleopatre->setSlug($slugger->slugify($asterix_cleopatre->getReference() . '-' . $asterix_cleopatre->getTitle()));
        $asterix_cleopatre->setImage("asterix_cleopatre.jpg");
        $asterix_cleopatre->setSynopsis("Jules César nargue Cléopâtre : les Romains construisent des temples et des forums magnifiques alors que les Égyptiens ne construisent plus rien depuis les pyramides. Vexée, Cléopâtre charge son architecte Numérobis de bâtir un palais pour César en trois mois. Pour Numérobis, sa seule chance de venir au bout de cette tâche malgré l'obstruction des Romains est de demander l'aide de son vieil ami Panoramix. Le druide part donc pour l'Égypte lui prêter main-forte, accompagné d'Astérix et Obélix.");
        $asterix_cleopatre->setAuthor($this->getReference("author-goscinny"));
        $manager->persist($asterix_cleopatre);
        $this->addReference("book-RG02454", $asterix_cleopatre);

        $manager->flush();
    }

    public function getOrder() {
        return 2;
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
