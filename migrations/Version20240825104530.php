<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240825104530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal_alimentation_animaux (animal_id INT NOT NULL, alimentation_animaux_id INT NOT NULL, INDEX IDX_A396CA8B8E962C16 (animal_id), INDEX IDX_A396CA8BC5B3215D (alimentation_animaux_id), PRIMARY KEY(animal_id, alimentation_animaux_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal_alimentation_animaux ADD CONSTRAINT FK_A396CA8B8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animal_alimentation_animaux ADD CONSTRAINT FK_A396CA8BC5B3215D FOREIGN KEY (alimentation_animaux_id) REFERENCES alimentation_animaux (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animal ADD image_id INT DEFAULT NULL, ADD habitat_id INT NOT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231FAFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id)');
        $this->addSql('CREATE INDEX IDX_6AAB231F3DA5256D ON animal (image_id)');
        $this->addSql('CREATE INDEX IDX_6AAB231FAFFE2D26 ON animal (habitat_id)');
        $this->addSql('ALTER TABLE user ADD role_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649D60322AC ON user (role_id)');
        $this->addSql('ALTER TABLE zoo ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE zoo ADD CONSTRAINT FK_994F3F35A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_994F3F35A76ED395 ON zoo (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal_alimentation_animaux DROP FOREIGN KEY FK_A396CA8B8E962C16');
        $this->addSql('ALTER TABLE animal_alimentation_animaux DROP FOREIGN KEY FK_A396CA8BC5B3215D');
        $this->addSql('DROP TABLE animal_alimentation_animaux');
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F3DA5256D');
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231FAFFE2D26');
        $this->addSql('DROP INDEX IDX_6AAB231F3DA5256D ON animal');
        $this->addSql('DROP INDEX IDX_6AAB231FAFFE2D26 ON animal');
        $this->addSql('ALTER TABLE animal DROP image_id, DROP habitat_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('DROP INDEX IDX_8D93D649D60322AC ON user');
        $this->addSql('ALTER TABLE user DROP role_id');
        $this->addSql('ALTER TABLE zoo DROP FOREIGN KEY FK_994F3F35A76ED395');
        $this->addSql('DROP INDEX IDX_994F3F35A76ED395 ON zoo');
        $this->addSql('ALTER TABLE zoo DROP user_id');
    }
}
