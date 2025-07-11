<?php

return [
    'about_assets_title'           => 'Informazioni sugli asset',
    'about_assets_text'            => 'Gli asset sono elementi tracciati con il numero di serie o il tag di asset. Tendono ad essere oggetti di valore più elevato dove identificare un elemento specifico.',
    'archived'  				=> 'Archiviato',
    'asset'  					=> 'Bene',
    'bulk_checkout'             => 'Assegnazione Massiva',
    'bulk_checkin'              => 'Check-in massivo',
    'checkin'  					=> 'Restituzione Bene',
    'checkout'  				=> 'Assegnazione Bene',
    'clear'                     => 'Pulisci',
    'clone'  					=> 'Copia Bene',
    'deployable'  				=> 'Assegnabile',
    'deleted'  					=> 'Questo bene è stato eliminato.',
    'delete_confirm'            => 'Sei sicuro di voler eliminare questo bene?',
    'edit'  					=> 'Modifica Asset',
    'model_deleted'  			=> 'Questo modello di asset è stato eliminato. Devi ripristinare il modello prima di poter ripristinare il bene.',
    'model_invalid'             => 'Il modello di questo bene non è valido.',
    'model_invalid_fix'         => 'Il bene deve avere un modello valido prima di poterne fare l\'assegnazioni, check-in o controlli.',
    'requestable'               => 'Disponibile',
    'requested'				    => 'richiesto',
    'not_requestable'           => 'Non Richiedibili',
    'requestable_status_warning' => 'Non cambiare richiedibilità',
    'restore'  					=> 'Ripristina Asset',
    'pending'  					=> 'In attesa',
    'undeployable'  			=> 'Non Distribuilbile',
    'undeployable_tooltip'  	=> 'Questo bene ha una etichetta che lo rende non distribuibile, il check-out non può avvenire.',
    'view'  					=> 'Vedi Asset',
    'csv_error' => 'C\'è un errore nel file CSV:',
    'import_text' => '<p>Carica un CSV con la cronologia dei beni. I beni e gli utenti DEVONO già esistere nel sistema, o saranno saltati. L\'importazione della cronologia avviene cercando la corrispondenza con il tag (etichetta) del bene. Proveremo a trovare un utente corrispondente in base al nome utente che fornisci e ai criteri selezionati qui sotto. Se non si seleziona alcun criterio qui sotto, verrà cercata la corrispondenza al formato del nome utente configurato in <code>Admin &gt; Impostazioni Generali</code>.</p><p>I campi inclusi nel CSV devono avere intestazioni: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Eventuali campi aggiuntivi verranno ignorati. </p><p>Checkin Date: le date di restituzione vuote o future assegneranno gli elementi all\'utente associato. Escludendo la colonna Checkin Date verrà creata una data di restituzione ad oggi.</p>
    </p>    ',
    'csv_import_match_f-l' => 'Prova ad abbinare gli utenti con il formato <strong>firstname.lastname</strong> (<code>jane.smith</code>)',
    'csv_import_match_initial_last' => 'Prova ad abbinare gli utenti con il formato <strong>primo cognome</strong> (<code>jsmith</code>)',
    'csv_import_match_first' => 'Prova ad abbinare gli utenti con il formato <strong>nome</strong> (<code>jane</code>)',
    'csv_import_match_email' => 'Prova a abbinare gli utenti con <strong>email</strong> come nome utente',
    'csv_import_match_username' => 'Prova ad abbinare gli utenti con il nome utente <strong></strong>',
    'error_messages' => 'Messaggi di errore:',
    'success_messages' => 'Messaggi di successo:',
    'alert_details' => 'Leggere sotto per maggiori dettagli.',
    'custom_export' => 'Esportazione Personalizzata',
    'mfg_warranty_lookup' => ':manufacturer Cerca Stato Garanzia',
    'user_department' => 'Dipartimento Utente',
];
