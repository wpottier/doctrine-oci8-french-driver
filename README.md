Doctrine Driver for OCI8 and Oracle Database in French
=====

Use with Symfony 
---

* Declare a service 

```xml
<service id="doctrine.dbal.events.oracle_session_init.listener" class="%doctrine.dbal.events.oracle_session_init.class%">
    <argument type="collection">
        <argument key="NLS_TIME_FORMAT">HH24:MI:SS</argument>
        <argument key="NLS_DATE_FORMAT">DD/MM/YYYY HH24:MI:SS</argument>
        <argument key="NLS_TIMESTAMP_FORMAT">DD/MM/YYYY HH24:MI:SS</argument>
        <argument key="NLS_TIMESTAMP_TZ_FORMAT">DD/MM/YYYY HH24:MI:SS TZH:TZM</argument>
        <argument key="NLS_NUMERIC_CHARACTERS">.,</argument>
    </argument>
    <tag name="doctrine.event_listener" event="postConnect" />
</service>
```