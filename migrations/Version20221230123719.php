<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221230123719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE picto_personnes ADD subcategory_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picto_personnes ADD CONSTRAINT FK_21FFF087F78A56EE FOREIGN KEY (subcategory_id_id) REFERENCES sub_category (id)');
        $this->addSql('CREATE INDEX IDX_21FFF087F78A56EE ON picto_personnes (subcategory_id_id)');
        $this->addSql('ALTER TABLE picto_petits_mots DROP FOREIGN KEY FK_2C03D31E3479DBB');
        $this->addSql('DROP INDEX IDX_2C03D31E3479DBB ON picto_petits_mots');
        $this->addSql('ALTER TABLE picto_petits_mots CHANGE pictopetitsmots_id subcategory_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picto_petits_mots ADD CONSTRAINT FK_2C03D31F78A56EE FOREIGN KEY (subcategory_id_id) REFERENCES sub_category (id)');
        $this->addSql('CREATE INDEX IDX_2C03D31F78A56EE ON picto_petits_mots (subcategory_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE picto_personnes DROP FOREIGN KEY FK_21FFF087F78A56EE');
        $this->addSql('DROP INDEX IDX_21FFF087F78A56EE ON picto_personnes');
        $this->addSql('ALTER TABLE picto_personnes DROP subcategory_id_id');
        $this->addSql('ALTER TABLE picto_petits_mots DROP FOREIGN KEY FK_2C03D31F78A56EE');
        $this->addSql('DROP INDEX IDX_2C03D31F78A56EE ON picto_petits_mots');
        $this->addSql('ALTER TABLE picto_petits_mots CHANGE subcategory_id_id pictopetitsmots_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE picto_petits_mots ADD CONSTRAINT FK_2C03D31E3479DBB FOREIGN KEY (pictopetitsmots_id) REFERENCES sub_category (id)');
        $this->addSql('CREATE INDEX IDX_2C03D31E3479DBB ON picto_petits_mots (pictopetitsmots_id)');
    }
}
