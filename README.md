# What is this?
This is plugin is target to test the Sub-Motd Support for PocketMine-MP.<br>
This is on-going to be test in the future, if this repository was archived, that means it was approved to the PocketMine-MP Original Repository.
# What is Sub-MOTD?
Custom Sub-MOTD Support as on Custom MOTD in the config. This changes the interface query of the server.
[![](https://www.wikihow.com/images/thumb/7/75/Join-Servers-in-Minecraft-PE-Step-38.jpg/v4-460px-Join-Servers-in-Minecraft-PE-Step)](https://github.com/pmmp/PocketMine-MP/issues/5204)
The "My World" will change as on `server.properties` provided sub-motd. We can say its useless but if we add this feature we can say people will not going to make their own pocketmine-mp for changing `VersionInfo.php` the name. So we can use function `Network->setName();` & `Network->setLanName()` if value is missing it will returning `VersionInfo::NAME` as default. People wont make their own useless Pocketmine-MP Forks to implement this feature.
- [Update VersionInfo.php #4737](https://github.com/pmmp/PocketMine-MP/pull/4737)
- [Sub-motd (description)? (PMMP Forums)](https://forums.pmmp.io/threads/sub-motd-description.10185/)

# Changes
## API
```php
Network->setName("MOTD");
Network->setLanName("MOTD");
```
## Behaivor Changes
[![](/preview.png)](https://github.com/pmmp/PocketMine-MP/issues/5204)

## Backwards Compability
```php
$this->getServer()->getNetwork()->setName("MOTD");
$this->getServer()->getNetwork()->setLanName("MOTD");

$this->getServer()->getMotd();
$this->getServer()->getLanMotd();

$this->getServer()->getNetwork()->getName();
$this->getServer()->getNetwork()->getLanName();

$this->getServer()->getQueryInformation()->getLanServerName();
$this->getServer()->getQueryInformation()->setLanServerName("MOTD");
```

# Tests
Test the server and run with example plugin test for this feature.
- [ExamplePlugin](https://github.com/xqwtxon/SubMotd-TestPlugin)

# For Plugin Developers
Do not use `Network->internalSetName()`, this kindly mostly bug on PocketMine-MP RakLib, The Query is displaying the ipv4/ipv6. It break backwards compability and behaivor of the game. Take a example how developers can do with it.

# For Internal Developers
Please help me to fix this `internalSetName()` to protect these agains the BC Break.