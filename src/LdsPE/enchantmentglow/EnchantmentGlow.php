<?php

declare(strict_types=1);

namespace LdsPE\enchantmentglow;

use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\Item;

class EnchantmentGlow{

	public const GLOW = 255;

	public static function register() : void
	{
		Enchantment::registerEnchantment(new Enchantment(self::GLOW, "glow", Enchantment::RARITY_COMMON, Enchantment::SLOT_ALL, Enchantment::SLOT_NONE, 1));
	}

	public static function addGlow(Item $item) : ?Item
	{
		$item->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(self::GLOW)));
		return $item;
	}

	public static function removeGlow(Item $item) : ?Item
	{
		$item->removeEnchantment(self::GLOW);
		return $item;
	}
}