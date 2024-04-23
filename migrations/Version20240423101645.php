<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423101645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ability (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE moveset (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, power INT NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE moveset_type (moveset_id INT NOT NULL, type_id INT NOT NULL, INDEX IDX_9F9C928A56C1FE2D (moveset_id), INDEX IDX_9F9C928AC54C8C93 (type_id), PRIMARY KEY(moveset_id, type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pokemon_moveset (pokemon_id INT NOT NULL, moveset_id INT NOT NULL, INDEX IDX_81FADDD52FE71C3E (pokemon_id), INDEX IDX_81FADDD556C1FE2D (moveset_id), PRIMARY KEY(pokemon_id, moveset_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pokemon_type (pokemon_id INT NOT NULL, type_id INT NOT NULL, INDEX IDX_B077296A2FE71C3E (pokemon_id), INDEX IDX_B077296AC54C8C93 (type_id), PRIMARY KEY(pokemon_id, type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE species (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE moveset_type ADD CONSTRAINT FK_9F9C928A56C1FE2D FOREIGN KEY (moveset_id) REFERENCES moveset (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE moveset_type ADD CONSTRAINT FK_9F9C928AC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemon_moveset ADD CONSTRAINT FK_81FADDD52FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemon_moveset ADD CONSTRAINT FK_81FADDD556C1FE2D FOREIGN KEY (moveset_id) REFERENCES moveset (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemon_type ADD CONSTRAINT FK_B077296A2FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemon_type ADD CONSTRAINT FK_B077296AC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemon ADD item_id INT DEFAULT NULL, ADD species_id INT DEFAULT NULL, ADD ability_id INT DEFAULT NULL, DROP name');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F3126F525E FOREIGN KEY (item_id) REFERENCES item (id)');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F3B2A1D860 FOREIGN KEY (species_id) REFERENCES species (id)');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F38016D8B2 FOREIGN KEY (ability_id) REFERENCES ability (id)');
        $this->addSql('CREATE INDEX IDX_62DC90F3126F525E ON pokemon (item_id)');
        $this->addSql('CREATE INDEX IDX_62DC90F3B2A1D860 ON pokemon (species_id)');
        $this->addSql('CREATE INDEX IDX_62DC90F38016D8B2 ON pokemon (ability_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP FOREIGN KEY FK_62DC90F38016D8B2');
        $this->addSql('ALTER TABLE pokemon DROP FOREIGN KEY FK_62DC90F3126F525E');
        $this->addSql('ALTER TABLE pokemon DROP FOREIGN KEY FK_62DC90F3B2A1D860');
        $this->addSql('ALTER TABLE moveset_type DROP FOREIGN KEY FK_9F9C928A56C1FE2D');
        $this->addSql('ALTER TABLE moveset_type DROP FOREIGN KEY FK_9F9C928AC54C8C93');
        $this->addSql('ALTER TABLE pokemon_moveset DROP FOREIGN KEY FK_81FADDD52FE71C3E');
        $this->addSql('ALTER TABLE pokemon_moveset DROP FOREIGN KEY FK_81FADDD556C1FE2D');
        $this->addSql('ALTER TABLE pokemon_type DROP FOREIGN KEY FK_B077296A2FE71C3E');
        $this->addSql('ALTER TABLE pokemon_type DROP FOREIGN KEY FK_B077296AC54C8C93');
        $this->addSql('DROP TABLE ability');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE moveset');
        $this->addSql('DROP TABLE moveset_type');
        $this->addSql('DROP TABLE pokemon_moveset');
        $this->addSql('DROP TABLE pokemon_type');
        $this->addSql('DROP TABLE species');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP INDEX IDX_62DC90F3126F525E ON pokemon');
        $this->addSql('DROP INDEX IDX_62DC90F3B2A1D860 ON pokemon');
        $this->addSql('DROP INDEX IDX_62DC90F38016D8B2 ON pokemon');
        $this->addSql('ALTER TABLE pokemon ADD name VARCHAR(255) NOT NULL, DROP item_id, DROP species_id, DROP ability_id');
    }
}
