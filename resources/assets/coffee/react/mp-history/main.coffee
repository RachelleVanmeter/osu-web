###
# Copyright 2016 ppy Pty. Ltd.
#
# This file is part of osu!web. osu!web is distributed with the hope of
# attracting more community contributions to the core ecosystem of osu!.
#
# osu!web is free software: you can redistribute it and/or modify
# it under the terms of the Affero GNU General Public License version 3
# as published by the Free Software Foundation.
#
# osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
# warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
# See the GNU Affero General Public License for more details.
#
# You should have received a copy of the GNU Affero General Public License
# along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
###
{div} = React.DOM
el = React.createElement

class MPHistory.Main extends React.Component
  timeBetweenRefresh: 10000

  constructor: (props) ->
    super props

    @state =
      events: []
      since: 0
      teamType: ''
      disbanded: false
      initialLoaded: false

    @loadHistory @state.since

  componentDidUpdate: (props, state) ->
    if !@state.initialLoaded
      target = $('.js-mp-history--event-box')[0]
      $(window).stop().scrollTo target.scrollHeight, 500

      @setState initialLoaded: true

  loadHistory: =>
    $.ajax laroute.route('multiplayer.match.history', matches: @props.match.id, full: @props.full),
      method: 'GET'
      dataType: 'JSON'
      data:
        since: @state.since

    .done (data) =>
      return if _.isEmpty data.data

      newEvents = _.concat @state.events, data.data

      lastEvent = _.last(newEvents)

      eventsShown = @state.eventsShown
      eventsShown += data.data.length if !_.isEmpty @state.events

      @setState
        events: newEvents
        since: _.last(newEvents).id
        eventsShown: eventsShown
        disbanded: lastEvent.text == 'DISBAND'

    .always =>
      if !@state.disbanded
        setTimeout @loadHistory, 10000

  render: ->
    div className: 'osu-layout__section',
      el MPHistory.Header,
        name: @props.match.name

      el MPHistory.Content,
        id: @props.match.id
        events: @state.events
        full: @props.full
