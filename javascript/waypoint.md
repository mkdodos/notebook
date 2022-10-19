// https://github.com/civiccc/react-waypoint


無限捲動呈現更多資料

在放置此元件的地方,有一條看不見的基準線,在視窗捲動到線的位置,就會觸發 
onEnter 事件
可將載入更多資料寫在此事件中,以達到無限捲動呈現更多資料的效果

npm install react-waypoint --save

import { Waypoint } from 'react-waypoint';

```
<Waypoint
  onEnter={loadMoreContent}
/>
```

```
<Table></Table>
<Waypoint/>
```
和 semantic ui Table 直接放一起 onEnter 會失效

改用

Grid 將 Table 包住

```
<Grid>
  <Table></Table>
</Grid>
<Waypoint/>
```