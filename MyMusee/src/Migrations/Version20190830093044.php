<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190830093044 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE museums ADD code_postal VARCHAR(255) DEFAULT NULL, ADD domaine_thematique LONGTEXT DEFAULT NULL, ADD departement LONGTEXT DEFAULT NULL, ADD interet LONGTEXT DEFAULT NULL, ADD nom_officiel LONGTEXT DEFAULT NULL, ADD nom_usage LONGTEXT DEFAULT NULL, ADD personnage_phare LONGTEXT DEFAULT NULL, ADD protection_batiment LONGTEXT DEFAULT NULL, ADD protection_espace LONGTEXT DEFAULT NULL, ADD region VARCHAR(255) DEFAULT NULL, ADD telephone VARCHAR(255) DEFAULT NULL, ADD themes LONGTEXT DEFAULT NULL, DROP Code Postal, DROP Domaine thématique, DROP Département, DROP Intérêt, DROP Nom officiel, DROP Nom usage, DROP Personnage phare, DROP Protection bâtiment, DROP Protection espace, DROP Région, DROP Téléphone, DROP Thèmes');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE museums ADD Code Postal VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Domaine thématique TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Département TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Intérêt TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Nom officiel TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Nom usage TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Personnage phare TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Protection bâtiment TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Protection espace TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Région VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Téléphone VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD Thèmes TEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, DROP code_postal, DROP domaine_thematique, DROP departement, DROP interet, DROP nom_officiel, DROP nom_usage, DROP personnage_phare, DROP protection_batiment, DROP protection_espace, DROP region, DROP telephone, DROP themes');
    }
}
